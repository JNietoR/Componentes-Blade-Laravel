<a {{ $attributes->merge([
    'class'=>'underline text-sm text-gray-600 hover:text-gray-900'
    ])
}}>
{{ $slot }}
</a>