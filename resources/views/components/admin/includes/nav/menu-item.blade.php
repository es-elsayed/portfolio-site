@props(['title' => '', 'route' => ''])

<li class="{{ url()->current() == $route ? 'active' : '' }}">
    <a class="menu-item" href="{{ $route }}"
        data-i18n="nav.dash.{{ $title = strtolower($title) }}">{{ ucwords($title) }}</a>
</li>
