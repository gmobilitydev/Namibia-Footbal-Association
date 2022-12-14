<?php

namespace Filament\Tables\Concerns;

use Closure;
use Filament\Tables\Actions\Action;
use Illuminate\Contracts\View\View;

trait HasEmptyState
{
    protected array $cachedTableEmptyStateActions;

    public function cacheTableEmptyStateActions(): void
    {
        $actions = Action::configureUsing(
            Closure::fromCallable([$this, 'configureTableAction']),
            fn (): array => $this->getTableEmptyStateActions(),
        );

        $this->cachedTableEmptyStateActions = collect($actions)
            ->mapWithKeys(function (Action $action): array {
                $action->table($this->getCachedTable());

                return [$action->getName() => $action];
            })
            ->toArray();
    }

    public function getCachedTableEmptyStateActions(): array
    {
        return $this->cachedTableEmptyStateActions;
    }

    public function getCachedTableEmptyStateAction(string $name): ?Action
    {
        return $this->getCachedTableEmptyStateActions()[$name] ?? null;
    }

    protected function getTableEmptyState(): ?View
    {
        return null;
    }

    protected function getTableEmptyStateActions(): array
    {
        return [];
    }

    protected function getTableEmptyStateDescription(): ?string
    {
        return null;
    }

    protected function getTableEmptyStateHeading(): ?string
    {
        return null;
    }

    protected function getTableEmptyStateIcon(): ?string
    {
        return null;
    }
}
