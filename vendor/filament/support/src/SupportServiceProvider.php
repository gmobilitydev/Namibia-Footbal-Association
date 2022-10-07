<?php

namespace Filament\Support;

use Composer\InstalledVersions;
use Filament\Support\Testing\TestsActions;
use HtmlSanitizer\Sanitizer;
use HtmlSanitizer\SanitizerInterface;
use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Str;
use Illuminate\Support\Stringable;
use Livewire\Testing\TestableLivewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SupportServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-support')
            ->hasConfigFile()
            ->hasTranslations()
            ->hasViews();
    }

    public function packageRegistered()
    {
        $this->app->scoped(
            SanitizerInterface::class,
            function () {
                return Sanitizer::create([
                    'extensions' => [
                        'basic',
                        'code',
                        'details',
                        'extra',
                        'iframe',
                        'image',
                        'list',
                        'table',
                    ],
                ]);
            },
        );

        TestableLivewire::mixin(new TestsActions());
    }

    public function packageBooted()
    {
        Blade::directive('captureSlots', function (string $expression): string {
            return "<?php \$slotContents = get_defined_vars(); \$slots = collect({$expression})->mapWithKeys(fn (string \$slot): array => [\$slot => \$slotContents[\$slot] ?? null])->toArray(); unset(\$slotContents) ?>";
        });

        Str::macro('sanitizeHtml', function (string $html): string {
            return app(SanitizerInterface::class)->sanitize($html);
        });

        Stringable::macro('sanitizeHtml', function (): Stringable {
            /** @phpstan-ignore-next-line */
            return new Stringable(Str::sanitizeHtml($this->value));
        });

        if (class_exists(AboutCommand::class)) {
            $packages = [
                'filament',
                'forms',
                'tables',
                'support',
            ];

            AboutCommand::add('Filament', [
                'Version' => InstalledVersions::getPrettyVersion('filament/support'),
                'Packages' => collect($packages)
                    ->filter(fn (string $package): bool => InstalledVersions::isInstalled("filament/{$package}"))
                    ->join(', '),
                'Views' => function () use ($packages): string {
                    $publishedViewPaths = collect($packages)->filter(fn (string $package): bool => is_dir(resource_path("views/vendor/{$package}")));

                    if (! $publishedViewPaths->count()) {
                        return '<fg=green;options=bold>NOT PUBLISHED</>';
                    }

                    return "<fg=red;options=bold>PUBLISHED:</> {$publishedViewPaths->join(', ')}";
                },
            ]);
        }
    }
}
