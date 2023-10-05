<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-md btn-danger']) }}>
    {{ $slot }}
</button>
