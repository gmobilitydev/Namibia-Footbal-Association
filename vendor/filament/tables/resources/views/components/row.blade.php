@props([
    'recordUrl' => null,
    'striped' => false,
])

<tr
    {{ $attributes->class([
        'hover:bg-gray-50' => $recordUrl,
        'dark:hover:bg-gray-500/10' => $recordUrl && config('tables.dark_mode'),
        'filament-tables-row',
        'even:bg-gray-100' => $striped,
        'dark:even:bg-gray-900' => $striped && config('tables.dark_mode'),
    ]) }}
>
    {{ $slot }}
</tr>
