<form {{ $attributes(['class' => 'form']) }}>
    @csrf
    <div class="form-body">
        {{ $slot }}
    </div>
    <div class="form-actions left">
        <x-admin.base.btn class="btn-warning mr-1" onClick="if(confirm('Your data will be ignored !!!')) return history.back();">
            <i class="ft-x"></i>
            {{ __('back') }}
        </x-admin.base.btn>
        <x-admin.base.btn type="submit">
            <i class="la la-check-square-o"></i>
            {{ __('save') }}
        </x-admin.base.btn>
    </div>
</form>
