@extends('layouts.app')
@section('title', 'صفحه اصلی')
@section('body', 'template-index')


@section('content')
    <!-- Body Container -->
    <div id="page-content">
        <!--Home Slideshow   1 | 2 | 3 -->
        {{-- slider show --}}
        <livewire:LoadWidget blockId="block_6" />
        <!--End Home Slideshow-->

        <!--Brand Logo-->
        <section class="section logo-section pb-0">
            <div class="container container-1330">

                {{-- future menu --}}
                <livewire:LoadWidget blockId="future_product_menu" />

            </div>
        </section>
        <!--End Brand Logo-->

        <!--Collection banner-->
        <livewire:LoadWidget blockId="block_7" />
        <!--End Collection banner-->

        <!--Products Slider-->
        <livewire:LoadWidget blockId="block_1" />
        <!--End Products Slider-->


        <!-- Landing-->
        <livewire:LoadWidget blockId="block_10" />
        <!--End  Landing-->


        <!-- Blog-->
        <livewire:LoadWidget blockId="block_4" />
        <!--End  Blog-->

    </div>
    <!-- End Body Container -->

    <!--MiniCart Drawer-->
    @include('partials.miniCartDrawer')
    <!--End MiniCart Drawer-->

    <!-- Product Quickshop Modal-->
    @include('partials.quickShopModal')
    <!-- End Product Quickshop Modal -->

    <!-- Product Addtocart Modal-->
    @include('partials.productAddtocartModal')
    <!-- End Product Addtocart Modal -->

    <!-- Product Quickview Modal-->
    @include('partials.productQuickviewModal')
    <!--End Product Quickview Modal-->

@endsection
