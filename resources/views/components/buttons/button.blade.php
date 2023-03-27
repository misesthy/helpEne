<button  type="submit" {{ $attributes->merge(['class' => 'btn btn-info btn-fill']) }}>
    {{ $slot }}
    {{ $label }}
</button>
