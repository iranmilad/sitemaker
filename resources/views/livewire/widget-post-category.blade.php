<div class="sidebar-widget clearfix categories">
    <div class="widget-title">
        <h2>دسته</h2>
    </div>
    <div class="widget-content">
        <ul class="sidebar-categories scrollspy clearfix">
            @foreach($categories as $category)
            <li class="lvl-1 active"><a href="{{ $category->link }}" class="site-nav lvl-1">{{ $category->name }}
                <span class="count">{{ $category->totalPosts }} </span></a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
