@props(['title' => ''])
<li class=" navigation-header">
    <span data-i18n="nav.category.{{ $title = strtolower($title) }}">{{ ucwords($title) }}</span><i
        class="la la-ellipsis-h ft-minus" data-toggle="tooltip" data-placement="right"
        data-original-title="{{ ucwords($title) }}"></i>
</li>
