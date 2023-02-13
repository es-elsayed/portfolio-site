@if (Session::has('success') || Session::has('errors'))
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="alert alert-{{ Session::has('success') ? 'success' : 'danger' }} alert-dismissible fade show"
                role="alert" id="alert">
                @if (count($errors) > 0)
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                @else
                    {!! Session::get('success') ?? Session::get('errors') !!}
                @endif
                <span type="button" class="close" data-dismiss="alert" aria-label="Close">
                    &times;
                </span>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endif
@push('scripts')
    <script>
        const alert = document.getElementById("alert")
        if (document.contains(alert)) {
            setTimeout(async () => alert.remove(), 10000);
        }
    </script>
@endpush
