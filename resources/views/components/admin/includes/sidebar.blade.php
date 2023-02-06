<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <x-admin.includes.nav.header :title="__('portfolio')"/>
                <x-admin.includes.nav.nav-item :title="__('settings')" icon="ft-message-circle">
                    <x-admin.includes.nav.menu :routes="[
                        'info' => route('admin.portfolio.settings.index'),
                        'messages' => route('admin.portfolio.messages.index'),
                        ]" />
                </x-admin.includes.nav.nav-item>

                {{-- <x-admin.includes.nav.nav-item :title="__('Messages')" icon="ft-message-circle">
                    <x-admin.includes.nav.menu :routes="['list' => route('admin.portfolio.messages.index'), 'create' => route('admin.portfolio.messages.create')]" />
                </x-admin.includes.nav.nav-item> --}}
        </ul>
    </div>
</div>
