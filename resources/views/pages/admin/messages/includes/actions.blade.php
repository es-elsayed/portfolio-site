{!! Form::open(['route' => ['messages.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group' style="border-radius: 4px;background-color: #e4e5e7">
    <a href="{{ route('messages.show', $id) }}" class='btn btn-delault'>
        <i class="la la-eye"></i>
    </a>
    <a href="{{ route('messages.edit', $id) }}" class='btn btn-delault'>
        <i class="la la-edit"></i>
    </a>
    {!! Form::button('<i class="la la-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger',
        'onclick' => 'return confirm("' . __('crud.are_you_sure') . '")',
    ]) !!}
</div>
{!! Form::close() !!}
