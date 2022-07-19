{!! Form::open(['route' => ['messages.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('messages.show', $id) }}" class='btn btn-default btn-xs'>
        <i class="fa fa-eye"></i>
    </a>
    <a href="{{ route('WarehouseShelve.bulkPrinta5') . '?ids=' . $id }}" target="_blank" class='btn btn-default btn-xs'>
        <i class="flaticon2-print"></i>
    </a>
    @can('warehouse.warehouseShelve.delete')
    <a href="{{ route('messages.edit', $id) }}" class='btn btn-default btn-xs'>
        <i class="fa fa-edit"></i>
    </a>
    @endcan
    @can('warehouse.warehouseShelve.delete')
    {!! Form::button('<i class="fa fa-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => 'return confirm("'.__('crud.are_you_sure').'")'
    ]) !!}
    @endcan
</div>
{!! Form::close() !!}
