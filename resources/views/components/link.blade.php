<a {{ $attributes->merge([
    'class'=>'hover:underline text-sm text-gray-600 hover:text-gray-900'
    ])
}}>
{{ $slot }}
</a>