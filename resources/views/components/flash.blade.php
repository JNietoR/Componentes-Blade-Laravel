@props([
    'type' => 'success',
    'theme' => [
        'info' => 'bg-blue-100 text-blue-700',
        'success' => 'bg-green-100 text-green-700',
        'error' => 'bg-red-100 text-red-700',
        'warning' => 'bg-yellow-100 text-yellow-700',
    ]
])
<!-- Le indicamos del array que hemos declarado antes aplica los estilos asociados al $type que le pasaremos por la vista {{ $theme[$type] }} -->
<div class="flex items-center rounded p-4 mb-4 text-sm {{ $theme[$type] }}">
    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"></path>
    </svg>
    <div>
        <span class="font-medium capitalize">{{ $type }}!</span>
        {{ $slot }}
    </div>
</div>