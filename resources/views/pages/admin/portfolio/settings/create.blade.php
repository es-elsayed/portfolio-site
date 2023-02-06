<x-admin.layout :title="__('Settings')" :breadcrumbTitle="__('Settings')">

    {{-- <x-slot name="header">
        <button class="btn btn-danger dropdown-toggle round btn-glow px-2" id="dropdownBreadcrumbButton" type="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
        <div class="dropdown-menu" aria-labelledby="dropdownBreadcrumbButton"><a class="dropdown-item" href="#"><i
                    class="la la-calendar-check-o"></i> Calender</a>
            <a class="dropdown-item" href="#"><i class="la la-cart-plus"></i> Cart</a>
            <a class="dropdown-item" href="#"><i class="la la-life-ring"></i> Support</a>
            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="la la-cog"></i>
                Settings</a>
        </div>
    </x-slot> --}}

    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <x-admin.card header="Settings" actions-collapse actions-close>
                <x-form :action="route('admin.dashboard')" id="vue">
                    <x-form.input name="f_name" label="f_name" />
                    <x-form.input name="l_name" label="l_name" />
                    <x-form.input name="full_name" label="full_name" />
                </x-form>
            </x-admin.card>
        </div>
    </div>

</x-admin.layout>

@push('scripts')
<script>
    console.log('hiiiii');
</script>
    <script>
        const vm = new Vue({
            el: '#vue',
            data() {
                return {

                }
            },
            mounted() {
                console.log('hi');
            },
            watch: {},
            methods: {

            }
        });
    </script>
@endpush
