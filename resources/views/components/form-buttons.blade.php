@props(['back' => true, 'save' => true, 'form'])
<div class="form-actions left">
    @if ($back)
        <x-admin.base.btn class="btn-warning mr-1"
            onClick="if(confirm('Your data will be ignored !!!')) return history.back();">
            <i class="ft-x"></i>
            {{ __('back') }}
        </x-admin.base.btn>
    @endif
    @if ($save)
        <x-admin.base.btn form="{{ $form }}" type="submit">
            <i class="la la-check-square-o"></i>
            {{ __('save') }}
        </x-admin.base.btn>
    @endif
</div>
