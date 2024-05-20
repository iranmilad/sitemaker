<div>
    <div class="sidebar-widget filterBox filter-widget product-tag">
        <div class="widget-title">
            <h2>{{ $title }}</h2>
        </div>
        <div class="widget-content filterDD">
            <ul class="tags-list product-tags d-flex-wrap clearfix">
                @foreach ($options as $index => $option)
                    <li class="item"><a class="rounded-5" href="/category?function={{ $option['value'] }}">{{ $option['value'] }}</a></li>
                @endforeach

            </ul>
            <span class="btn btn-sm brd-link btnview"><a class="rounded-5" href="/category">مشاهده همه</a></span>
        </div>
    </div>
</div>
