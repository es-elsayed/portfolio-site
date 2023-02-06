<x-admin.layout :title="__('Messages')" :breadcrumbTitle="__('messages')">

    {{-- @section('header_actions')
        @can('warehouse.warehouseShelve.create')
        @endcan
        @endsection --}}
    {{-- <x-slot name="header">
        <a class="btn btn-primary font-weight-bolder mx-2"
            href="{{ route('admin.portfolio.messages.create') }}"><i class="fas fa-plus"></i> {{ __('Create') }}</a>
    </x-slot> --}}

    <div class="container">
        {{-- @include('flash::message') --}}
        {{-- <div class="clearfix"></div> --}}

        <div class="card card-primary">
            <div class="card-body">
                @include('pages.admin.messages.includes.table')
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>

</x-admin.layout>
