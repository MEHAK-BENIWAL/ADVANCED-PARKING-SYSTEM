<button {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-md btn-info']) }}>
    {{ $slot }}
</button>
