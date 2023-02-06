@props(['name' => '', 'label', 'required' => false, 'groupClass' => ''])
<x-form.field :class="$groupClass">

    @if ($label ?? 0)
        <x-form.label :required="$required" :for="$name">{{ $label }}</x-form.label>
    @endif

    <input
        {{ $attributes->merge([
            'type' => 'text',
            'class' => $errors->has($name) ? 'is-invalid' : '' . 'form-control',
            'id' => $name,
            'name' => $name,
            'value' => old($name),
            'autocomplete' => false,
            'required' => $required,
        ]) }}>

    <x-form.error :name="$name" />
</x-form.field>
