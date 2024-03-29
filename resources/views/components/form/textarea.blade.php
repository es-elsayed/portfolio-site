@props(['name'])
<x-form.field>
    <x-form.label :name="$name" />

    <textarea name="{{ $name }}" id="{{ $name }}" class="border border-gray-200 p-2 w-full rounded">

    </textarea>
    <textarea
        {{ $attributes([
            'class' => 'form-control',
            'name' => $name,
            'id' => $name,
            'rows' => '3',
        ]) }}>
        {{ $slot ?? old($name) }}
    </textarea>
    
    <x-form.error :name="$name" />

</x-form.field>
