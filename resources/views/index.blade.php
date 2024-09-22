@extends('layouts.app')
@section('title', 'صفحه اصلی')
@section('body', 'template-index')


@section('content')
    <!-- Body Container -->
    <div id="page-content">

        @foreach ($grid->settings['sequence'] as $sequence)

            <livewire:LoadWidget :id="$sequence" />
            @if ($loop->iteration == $grid->settings['homePage'])
                @break
            @endif

        @endforeach


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
