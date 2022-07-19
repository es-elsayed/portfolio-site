<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <x-admin.includes.nav.nav-item title="Messages" icon="ft-message-circle">
                <x-admin.includes.nav.menu :routes="['list' => route('messages.index'), 'create' => route('messages.create')]" />
            </x-admin.includes.nav.nav-item>
        </ul>
    </div>
</div>
