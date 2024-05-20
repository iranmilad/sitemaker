<div>
    <!--    Categories:start-->
    <section class="categories mt-5">
        <h2 class="text-center fs-4">{{ $menus->title }}</h2>
        <div class="row mt-5">
            <div class="col-sm-12 col-md-12 col-lg-10 col-xl-10 offset-sm-0 offset-md-0 offset-lg-2 offset-xl-2 mb-3">
                <!--                Row:start-->
                <div class="row">
                    @foreach ($menus->childMenus as $menu)
                        <!--                Category Item:start-->
                        <div class="col-4 col-lg-2 col-xl-2 mb-4">
                            <a href="{{ $menu->link  }}" title="">
                                <img src="{{ $menu->icon }}" alt="" class="tw-w-full tw-block tw-relative tw-rounded-lg img-fluid img-opacity">
                                <strong class="text-center d-block fs-7">{{ $menu->title  }}</strong>
                            </a>
                        </div>
                        <!--                Category Item:end-->
                        @if ($loop->index % 5 == 4)
                            <div class="clearfix"></div>
                        @endif
                    @endforeach

                </div>
                <!--                Row:end-->

            </div>
        </div>

    </section>
    <!--    Categories:end-->
</div>
