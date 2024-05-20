<div>
<!-- color-options.blade.php -->
    <div class="sidebar-widget filterBox filter-widget">
        <div class="widget-title">
            <h2>{{ $title }}</h2>
        </div>
        <div class="widget-content filter-color filterDD">
            <ul class="swacth-list swatches d-flex-center clearfix pt-0">
                @foreach ($options as $option)

                    <li class="swatch large radius available active"><img
                        src="{{ $option['icon'] }}"
                        alt="تصویر" width="70" height="70" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="{{ $option['color'] }}" /></li>
                    <input type="radio" name="{{ $name }}" value="{{ $option['value'] }}" class="d-none">

                @endforeach
            </ul>
        </div>
    </div>


</div>
