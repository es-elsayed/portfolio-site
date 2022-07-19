@props(['routes' => []])

<ul class="menu-content">
    @foreach ($routes as $key => $value)
        <x-admin.includes.nav.menu-item title="{{ $key }}" route="{{ $value }}" />
    @endforeach
</ul>
