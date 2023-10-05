<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn btn-success mt-3']) }}>
    {{ $slot }}
</button>
