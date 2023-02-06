<button {{ $attributes([
    'type' => 'button',
    'class' => 'btn btn-primary',
]) }}>
    {{-- mr-1 --}}
    {{ $slot }}
</button>

{{-- <button type="submit" class="btn btn-primary">
    <i class="la la-check-square-o"></i>
    Save
</button> --}}
