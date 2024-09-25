@if ($menu_style=='1')
    <div class="col-1 col-sm-1 col-md-1 col-lg-8 align-self-center d-menu-col">
        <nav class="navigation" id="AccessibleNav">
                <ul id="siteNav" class="site-nav medium center">
                    @foreach($menu->childMenus as $mainItem)
                        @if ($mainItem->link)
                            <li class="lvl1"><a href="{{ $mainItem->link }}">{{ $mainItem->title }}</a></li>
                        @else
                            <li class="lvl1 parent megamenu"><a href="#">{{ $mainItem->title }} <i class="icon anm anm-angle-down-l"></i></a>
                                <div class="megamenu menu_style2">
                                    <ul class="row mmWrapper">
                                        @foreach($mainItem->childMenus as $item)
                                            <li class="lvl-1 col-md-3 col-lg-3"><a href="{{ $item->link }}" class="site-nav lvl-1 menu-title">{{ $item->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                        @endif
                    @endforeach
                </ul>
        </nav>
    </div>
@elseif ($menu_style=='8')
    <div class="col-1 col-sm-1 col-md-1 col-lg-12 align-self-center d-menu-col">
        <nav class="navigation" id="AccessibleNav">
            <ul id="siteNav" class="site-nav medium center">
                @if($menu)
                    @foreach($menu->childMenus as $mainItem)
                        <li class="lvl1 @if(!$mainItem->link) parent megamenu @endif">
                            <a href="{{ $mainItem->link ?: '#' }}">
                                {{ $mainItem->title }}
                                @if(!$mainItem->link)
                                    <i class="icon anm anm-angle-down-l"></i>
                                @endif
                            </a>
                            @if(!$mainItem->link)
                                <div class="megamenu menu_style2">
                                    <ul class="row mmWrapper">
                                        @foreach($mainItem->childMenus as $item)
                                            <li class="lvl-1 col-md-3 col-lg-3">
                                                <a href="{{ $item->link }}" class="site-nav lvl-1 menu-title">{{ $item->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </li>
                    @endforeach
                @endif
            </ul>
        </nav>
    </div>
@elseif ($menu_style=='4')
    <div class="col-1 col-sm-1 col-md-1 col-lg-5 align-self-center d-menu-col hdr-menu-left menu-position-left">
        <nav class="navigation" id="AccessibleNav">
            <ul id="siteNav" class="site-nav medium left">
                @foreach($menu->childMenus as $mainItem)
                    @if ($mainItem->childMenus->isEmpty())
                        <li class="lvl1"><a href="{{ $mainItem->link }}" class="site-nav lvl-1">{{ $mainItem->title }}</a></li>
                    @else
                        <li class="lvl1 parent dropdown"><a href="{{ $mainItem->link }}" class="site-nav lvl-1">{{ $mainItem->title }} <i class="icon anm anm-angle-down-l"></i></a>
                            <ul class="dropdown">
                                @foreach($mainItem->childMenus as $item)
                                    <li><a href="{{ $item->link }}" class="site-nav lvl-2">{{ $item->title }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endforeach
            </ul>
        </nav>
    </div>
@elseif ($menu_style=='5')

    <div class="col-1 col-sm-1 col-md-1 col-lg-6 col-xxl-6 align-self-center d-menu-col hdr-menu-left menu-position-left">
        <nav class="navigation ps-lg-4 pe-xl-3" id="AccessibleNav">
            <ul  id="siteNav" class="site-nav middle left">
                @if($menu)
                    @foreach($menu->childMenus as $mainItem)
                        @if ($mainItem->childMenus->isEmpty())
                            <li class="lvl1"><a href="{{ $mainItem->link }}" class="site-nav lvl-1">{{ $mainItem->title }}</a></li>
                        @else
                            <li class="lvl1 parent dropdown"><a href="{{ $mainItem->link }}" class="site-nav lvl-1">{{ $mainItem->title }} <i class="icon anm anm-angle-down-l"></i></a>
                                <ul class="dropdown">
                                    @foreach($mainItem->childMenus as $item)
                                        <li><a href="{{ $item->link }}" class="site-nav lvl-2">{{ $item->title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endif

                    @endforeach

                @endif
            </ul>
        </nav>
    </div>
@elseif ($menu_style=='6')
<div class="col-1 col-sm-1 col-md-1 col-lg-10 align-self-center d-menu-col hdr-menu-left menu-position-left">
    <nav class="navigation" id="AccessibleNav">
        <ul id="siteNav" class="site-nav medium left">
            @if($menu)
                @foreach($menu->childMenus as $mainItem)
                    @if ($mainItem->childMenus->isEmpty())
                        <li class="lvl1"><a href="{{ $mainItem->link }}" class="site-nav lvl-1">{{ $mainItem->title }}</a></li>
                    @else
                        <li class="lvl1 parent dropdown"><a href="{{ $mainItem->link }}" class="site-nav lvl-1">{{ $mainItem->title }} <i class="icon anm anm-angle-down-l"></i></a>
                            <ul class="dropdown">
                                @foreach($mainItem->childMenus as $item)
                                    <li><a href="{{ $item->link }}" class="site-nav lvl-2">{{ $item->title }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endforeach
            @endif
        </ul>
    </nav>
</div>
@endif
