@extends('layouts.app')
@section('title', $page->title)
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
                            {{ $page->title }}
                        </div>
                        <!--Breadcrumbs-->
                        {{ Breadcrumbs::render('single',$page) }}
                        <!--End Breadcrumbs-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Header-->

        <!--محتوای اصلی-->

        {{-- contact page --}}
        @php
            eval(' ?>'.$compiledContent.' <?php ');
        @endphp
        <!--پایان محتوای اصلی-->
    </div>
    <!-- End Body Container -->

    <!--MiniCart Drawer-->
    @include('partials.miniCartDrawer')
    <!--End MiniCart Drawer-->

@endsection
