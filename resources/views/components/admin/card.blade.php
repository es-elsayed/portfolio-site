@props(['header', 'actionsCollpase' => false, 'actionsReload' => false, 'actionsExpand' => false, 'actionsClose' => false])
<div class="card">
    @if ($header ?? 0)
        <div class="card-header">
            <h4 class="card-title" id="basic-layout-card-center">{{ $header }}</h4>
            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
            {{-- @if ($actions) --}}
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    @if ($actionsCollapse)
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    @endif
                    @if ($actionsReload)
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    @endif

                    @if ($actionsExpand)
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    @endif

                    @if ($actionsClose)
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    @endif
                </ul>
            </div>
            {{-- @endif --}}
        </div>
    @endif
    <div class="card-content collapse show">
        <div class="card-body">
            {{ $slot }}
        </div>
    </div>
</div>
