<div>
    <div class="row">
        @if ($this->options->filter ?? true)
            <!--Sidebar-->
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 sidebar sidebar-bg filterbar">
                <div class="closeFilter d-block d-lg-none"><i class="icon anm anm-times-r"></i></div>
                <div class="sidebar-tags sidebar-sticky clearfix">
                    <!--Filter By-->
                    {{-- <div class="sidebar-widget filterBox filter-widget">
                        <div class="widget-title">
                            <h2>فیلتر بر اساس</h2>
                        </div>
                        <div class="widget-content filterby filterDD" id="collapseRemoveFilters">

                            <ul class="items tags-list d-flex-wrap">
                                <li class="item"><a href="#;" class="rounded-5"><span
                                            class="filter-value">زنان</span><i class="icon anm anm-times-r"></i></a>
                                </li>
                                <li class="item"><a href="#;" class="rounded-5"><span
                                            class="filter-value">آبی</span><i class="icon anm anm-times-r"></i></a>
                                </li>
                                <li class="item"><a href="#;" class="rounded-5"><span
                                            class="filter-value">XL</span><i class="icon anm anm-times-r"></i></a>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-sm brd-link" data-bs-toggle="collapse" data-bs-target="#collapseRemoveFilters" aria-expanded="true">
                                <span>حذف فیلتر ها</span>
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>

                        </div>
                    </div> --}}
                    <!--End Filter By-->
                    <!--Categories-->
                    <div class="sidebar-widget clearfix categories filterBox filter-widget">
                        <div class="widget-title">
                            <h2>دسته ها</h2>
                        </div>
                        <div class="widget-content filterDD">
                            <ul class="sidebar-categories scrollspy morelist clearfix">

                                    <ul class="sublinks">
                                        @foreach ($categories as $categry)
                                            <li class="lvl1 more-item"><a href="/category/{{ $categry->alias }}" class="site-nav">{{ $categry->title }}</a></li>
                                        @endforeach
                                    </ul>


                            </ul>
                        </div>
                    </div>
                    <!--Categories-->
                    <!--Price Filter-->
                    <div class="sidebar-widget filterBox filter-widget">
                        <div class="widget-title">
                            <h2>قیمت</h2>
                        </div>
                        <form class="widget-content price-filter filterDD" wire:submit.prevent="loadProducts">


                            <div class="row">
                                <div class="mt-2">
                                    <label for="minprice">حداقل قیمت (تومان):</label>
                                    <input type="number" id="minprice" wire:model="minprice" name="minprice" />
                                </div>
                                <div class="mt-2">
                                    <label for="maxprice">حداکثر قیمت (تومان):</label>
                                    <input type="number" id="maxprice" wire:model="maxprice" name="maxprice" />
                                </div>
                                <div class="text-right mt-2">
                                    <button class="btn btn-sm" type="submit">فیلتر کنید</button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <!--End Price Filter-->
                    <!--Color Swatches-->

                    {{-- <livewire:color-options title="رنگ" name="colorBox" :options='[
                        ["value" => "black", "label" => "سیاه", "color" => "#000","icon" => "/images/products/swatches/blue-red.jpg"],
                        ["value" => "gray", "label" => "خاکستری", "color" => "#475569","icon" => "/images/products/swatches/blue-red.jpg"],
                        ["value" => "orange", "label" => "نارنجی", "color" => "#f97316","icon" => "/images/products/swatches/blue-red.jpg"],
                        ["value" => "yellow", "label" => "زرد", "color" => "#eab308","icon" => "/images/products/swatches/blue-red.jpg"],
                        ["value" => "blue", "label" => "آبی", "color" => "#0ea5e9","icon" => "/images/products/swatches/blue-red.jpg"],
                        ["value" => "purple", "label" => "بنفش", "color" => "#8b5cf6","icon" => "/images/products/swatches/blue-red.jpg"],
                        ["value" => "pink", "label" => "صورتی", "color" => "#f43f5e","icon" => "/images/products/swatches/blue-red.jpg"],
                    ]' /> --}}
                    <!--End Color Swatches-->
                    <!--Size Swatches-->
                    {{-- <div class="sidebar-widget filterBox filter-widget">
                        <div class="widget-title">
                            <h2>Size</h2>
                        </div>
                        <div class="widget-content filter-size filterDD">
                            <ul class="swacth-list size-swatches d-flex-center clearfix">
                                <li class="swatch large radius soldout"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="XS">XS</span>
                                </li>
                                <li class="swatch large radius available"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="S">S</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="M">M</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="L">L</span></li>
                                <li class="swatch large radius available"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="X">X</span></li>
                                <li class="swatch large radius available active"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="XL">XL</span>
                                </li>
                                <li class="swatch large radius available"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="XLL">XLL</span>
                                </li>
                                <li class="swatch large radius available"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="XXL">XXL</span>
                                </li>
                                <li class="swatch large radius available"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="25">25</span>
                                </li>
                                <li class="swatch large radius available"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="35">35</span>
                                </li>
                                <li class="swatch large radius available"><span class="swatchLbl"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="40">40</span>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                    <!--End Size Swatches-->
                    <!--Product Brands-->
                    {{-- <div class="sidebar-widget filterBox filter-widget brand-filter">
                        <div class="widget-title">
                            <h2>برندها</h2>
                        </div>
                        <div class="widget-content filterDD">
                            <ul class="clearfix">
                                <li><input type="checkbox" value="avone" id="avone"><label
                                        for="avone"><span></span>آوون</label></li>
                                <li><input type="checkbox" value="diva" id="diva"><label
                                        for="diva"><span></span>دیوا</label></li>
                                <li><input type="checkbox" value="optimal" id="optimal"><label
                                        for="optimal"><span></span>بهینه</label></li>
                            </ul>
                        </div>
                    </div> --}}
                    <!--End Product Brands-->
                    <!--Product Tags-->


                    <livewire:check-box title="کاربری" name="function" :options='[
                        ["id" => "آشپزخانه", "name" => "function", "label" => "اشپزخانه", "value" => "آشپزخانه"],
                        ["id" => "پذیرایی", "name" => "function", "label" => "پذیرایی", "value" => "پذیرایی"],
                        ["id" => "اتاق خواب", "name" => "function", "label" => " اتاق خواب", "value" => "اتاق خواب"],
                        ["id" => "اتاق کودک", "name" => "function", "label" => "اتاق کودک", "value" => "اتاق کودک"],
                        ["id" => "دفتر کار", "name" => "function", "label" => " دفتر کار", "value" => "دفتر کار"],
                    ]' />

                    <!--End Product Tags-->

                </div>
            </div>
            <!--End Sidebar-->

        @endif
        <!--Products-->
        <div class="col-12 col-sm-12 col-md-12 col-lg-9 main-col">
            <!--Toolbar-->
            <div class="toolbar toolbar-wrapper shop-toolbar">
                <div class="row justify-content-between">
                    {{-- <div class="col-4 col-sm-2 col-md-4 col-lg-4 text-left filters-toolbar-item d-flex order-1 order-sm-0">
                        <button type="button" name="add" class="btn btn-secondary"><span>همه افزودن به سبد خرید</span></button>
                    </div> --}}
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 text-right product-count order-0 order-md-1 mb-3 mb-sm-0">
                        <span class="toolbar-product-count">نمایش: {{ count($products) }} محصول</span>
                    </div>
                    <div class="col-8 col-sm-6 col-md-4 col-lg-4 text-right filters-toolbar-item d-flex justify-content-end order-2 order-sm-2">
                        <div class="filters-item d-flex align-items-center">

                                <label for="showBy" class="mb-0 ms-2 text-nowrap d-none d-sm-inline-flex">نمایش:</label>
                                <select wire:model.change="showBy" name="showBy" id="showBy" class="filters-toolbar-show">
                                    <option value="10" selected>10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                    <option value="30">30</option>
                                </select>

                        </div>

                        <div class="filters-item d-flex align-items-center ms-2 ms-lg-3">

                                <label for="sortBy" class="mb-0 me-2 text-nowrap d-none d-sm-inline-flex">مرتب سازی بر اساس:</label>
                                <select wire:model.change="sortBy" name="sortBy" id="sortBy" class="filters-toolbar-sort">
                                    <option value="featured" selected>ویژه</option>
                                    <option value="best-selling">پرفروش ترین</option>
                                    <option value="cheapest">قیمت، کم به بالا</option>
                                    <option value="expensive">قیمت، از بالا به پایین</option>
                                    <option value="newest">تاریخ، جدید به قدیمی</option>
                                </select>

                        </div>

                    </div>
                </div>
            </div>

            <!--Product Grid-->
            <div class="grid-products grid-view-items">
                <div class="row col-row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2">
                    @if($products && count($products) > 0)
                        @foreach($products as $product)
                            <div class="item col-item">
                                <x-product :product="$product" />
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

            <!-- PAGINATION -->
            <div id="category-pagination"  class="clearfix pagination-bottom">
                <!-- for first load just do it -->
                {{ $products->links() }}
                <!-- <div class="first-pagination" data-total="10" data-value="2"></div> -->
            </div>
            <!-- PAGINATION -->
            @foreach ($products as $product)
                <x-product-quickview :product="$product" />
            @endforeach

        </div>
        <!--End Products-->
    </div>
</div>

