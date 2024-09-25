@if ($menu_style=='1')
    <div>
        <h4 class="h4">{{ $menu->title }}</h4>
        <ul>
            @foreach ($menu->childMenus  as $item)
                <li ><a href="{{ $item->link  }}">{{ $item->title  }}</a></li>
            @endforeach
        </ul>
    </div>
@endif
