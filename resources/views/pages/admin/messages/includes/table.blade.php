@push('styles')
    <x-admin.includes.datatables_css />
@endpush

{!! $dataTable->table([
    'width' => '100%',
    'class' => 'table table-centered table-nowrap table-hover activate-select',
]) !!}

@push('scripts')
    <x-admin.includes.datatables_js />
    {!! $dataTable->scripts() !!}
@endpush
