{{-- resources/views/partials/breadcrumbs.blade.php --}}
@unless ($breadcrumbs->isEmpty())
    <div class="breadcrumbs">
        @foreach ($breadcrumbs as $breadcrumb)
            @if (!is_null($breadcrumb->url) && !$loop->last)
                <span class="title"> <i class="icon anm anm-angle-left-l"></i>  <a href="{{ $breadcrumb->url }}" title="{{ $breadcrumb->title }}"> {{ $breadcrumb->title }}</a></span>
            @else
                <span class="main-title fw-bold"><i class="icon anm anm-angle-left-l"></i><a href="{{ $breadcrumb->url ?? null }}" title="{{ $breadcrumb->title }}"> {{ $breadcrumb->title }}</a></span>
            @endif

        @endforeach
    </div>
@endunless

