@if ($style=='1')
    <div>
        <h4 class="h4">{{ $menus->title }}</h4>
        <ul>
            @foreach ($menus->childMenus  as $menu)
                <li ><a href="{{ $menu->link  }}">{{ $menu->title  }}</a></li>
            @endforeach
        </ul>
    </div>
@endif
