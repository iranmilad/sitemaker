@extends('layouts.app')
@section('title', 'درباره ما')
@section('body', 'aboutus-page')


@section('content')
    <!-- Body Container -->
    <div id="page-content">
        <!--سرصفحه صفحه-->
        <div class="page-header text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                        <div class="page-title">
                            {{-- contact page --}}
                            <livewire:LoadWidget blockId="block_55" />
                        </div>
                        <!--Breadcrumbs-->
                        {{ Breadcrumbs::render('about-us') }}
                        <!--End Breadcrumbs-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Header-->

        <!--محتوای اصلی-->
        <!-- بخش مقصد -->
        {{-- contact page --}}
        <livewire:LoadWidget blockId="block_54" />


        <!-- بخش پایان مقصد -->



        <!--پایان محتوای اصلی-->
    </div>
    <!-- End Body Container -->

    <!--MiniCart Drawer-->
    @include('partials.miniCartDrawer')
    <!--End MiniCart Drawer-->

@endsection
