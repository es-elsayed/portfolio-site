@props(['title' => '', 'route' => '', 'icon' => ''])
<li class=" nav-item">
    <a href="{{ $route }}">
        <i class="{{ $icon }}"></i>
        <span class="menu-title" data-i18n="nav.dash.{{ $title = strtolower($title) }}">{{ ucwords($title) }}</span>
        {{-- <span class="badge badge badge-info badge-pill float-right mr-2">3</span> --}}
    </a>
    @if (!$route)
        {{ $slot }}
    @endif
</li>


{{-- ex: if u want to make a single menu item --}}
{{-- <x-admin.includes.nav.nav-item title="DaShBo RD" icon="la la-home" route="islamabdelkader.com"/> --}}

{{-- ex: if u want to make a dropdown menu-item --}}
{{-- <x-admin.includes.nav.nav-item title="DaShBo RD" icon="la la-home">
                <x-admin.includes.nav.menu :routes="['first' => route('admin.portfolio.messages.create'),'second' => route('admin.portfolio.messages.update')]" />
    </x-admin.includes.nav.nav-item> --}}
