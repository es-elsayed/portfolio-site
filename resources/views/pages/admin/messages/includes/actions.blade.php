{!! Form::open(['route' => ['admin.portfolio.messages.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('admin.portfolio.messages.show', $id) }}" class='btn btn-outline-info'>
        <i class="la la-eye"></i>
    </a>
    <a href="{{ route('admin.portfolio.messages.edit', $id) }}" class='btn btn-outline-warning'>
        <i class="la la-edit"></i>
    </a>
    {!! Form::button('<i class="la la-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-outline-danger',
        'onclick' => 'return confirm("' . __('crud.are_you_sure') . '")',
    ]) !!}
</div>
{!! Form::close() !!}
