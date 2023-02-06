@props(['required' => false])

<label {{ $attributes }}> {{ ucwords($slot) }}
    @if ($required)
        <span class="text-danger">*</span>
    @endif
</label>
