@props([
    'type' => 'info',
    'message' => '',
    'timeout' => 5000
])

@php
    $styles = [
        'success' => [
            'bg' => 'bg-emerald-50/90',
            'border' => 'border-emerald-200',
            'text' => 'text-emerald-800',
            'icon' => 'fa-circle-check',
            'iconColor' => 'text-emerald-500'
        ],
        'error' => [
            'bg' => 'bg-rose-50/90',
            'border' => 'border-rose-200',
            'text' => 'text-rose-800',
            'icon' => 'fa-circle-xmark',
            'iconColor' => 'text-rose-500'
        ],
        'warning' => [
            'bg' => 'bg-amber-50/90',
            'border' => 'border-amber-200',
            'text' => 'text-amber-800',
            'icon' => 'fa-triangle-exclamation',
            'iconColor' => 'text-amber-500'
        ],
        'info' => [
            'bg' => 'bg-sky-50/90',
            'border' => 'border-sky-200',
            'text' => 'text-sky-800',
            'icon' => 'fa-circle-info',
            'iconColor' => 'text-sky-500'
        ],
    ][$type];
@endphp

<div
    x-data="{ show: true }"
    x-show="show"
    x-init="setTimeout(() => show = false, {{ $timeout }})"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 translate-y-2"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="flex items-center p-4 mb-4 border rounded-2xl backdrop-blur-sm {{ $styles['bg'] }} {{ $styles['border'] }} {{ $styles['text'] }}"
    role="alert"
>
    <div class="flex-shrink-0">
        <i class="fa-solid {{ $styles['icon'] }} text-lg {{ $styles['iconColor'] }}"></i>
    </div>
    <div class="ml-3 text-sm font-medium flex-1">
        {{ $message }}
    </div>
    <button @click="show = false" type="button" class="ml-auto -mx-1.5 -my-1.5 p-1.5 inline-flex h-8 w-8 hover:bg-white/50 rounded-lg transition-colors">
        <i class="fa-solid fa-xmark"></i>
    </button>
</div>
