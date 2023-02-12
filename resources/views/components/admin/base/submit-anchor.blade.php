@props(['id' => 'myForm', 'url' => '#', 'method' => 'post'])
<form id="{{ $id }}" action="{{ $url }}" method="{{ $method }}">
    @csrf
    @method($method)
</form>
<a {{ $attributes([
    'class' => 'dropdown-item',
    'onclick' => "document.getElementById('$id').submit();",
]) }}>
    {{ $slot }}
</a>
