@props(['title', 'header'])
<div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
    <h3 class="content-header-title mb-0 d-inline-block">{{ $title }}</h3>
    <div class="row breadcrumbs-top d-inline-block">
        <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                {{-- <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Basic Forms</a>
                </li> --}}
                @for ($i = 2; $i <= count(Request::segments()); $i++)
                    <li class="breadcrumb-item {{ ($i < count(Request::segments())) & ($i > 0) ? '' : 'active' }}">
                        <a class="text-muted"
                            href="javascript: void(0);">{{ $i == 1 ? Str::upper(Request::segment($i)) : Str::title(Request::segment($i)) }}</a>
                    </li>
                @endfor
            </ol>
        </div>
    </div>
</div>
<div class="content-header-right col-md-6 col-12">
    <div class="dropdown float-md-right">
        {{ $header }}
        {{-- <button class="btn btn-danger dropdown-toggle round btn-glow px-2" id="dropdownBreadcrumbButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
      <div class="dropdown-menu" aria-labelledby="dropdownBreadcrumbButton"><a class="dropdown-item" href="#"><i class="la la-calendar-check-o"></i> Calender</a>
        <a class="dropdown-item" href="#"><i class="la la-cart-plus"></i> Cart</a>
        <a class="dropdown-item" href="#"><i class="la la-life-ring"></i> Support</a>
        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="la la-cog"></i> Settings</a>
      </div> --}}
    </div>
</div>
