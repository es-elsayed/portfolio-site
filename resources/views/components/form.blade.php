<form {{ $attributes(['class' => 'form']) }}>
    @csrf
    <div class="form-body">
        {{ $slot }}
    </div>
</form>
