<x-admin.layout :title="__('Settings')" :breadcrumbTitle="__('Settings')">

    <x-slot name="header">
        <x-form-buttons form="create_or_update" />
    </x-slot>

    <x-admin.form-card>
        <x-admin.card header="Settings" actions-collapse actions-close>
            <x-form :action="route('admin.portfolio.settings.store')" method="post" id="create_or_update">
                <x-form.input name="f_name" label="f_name" />
                <x-form.input name="l_name" label="l_name" />
                <x-form.input name="full_name" label="full_name" />
            </x-form>
        </x-admin.card>
    </x-admin.form-card>

</x-admin.layout>
