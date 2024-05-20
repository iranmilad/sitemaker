@extends('layouts.app')
@section('title', 'تماس با ما')
@section('body', 'contact-page')


@section('content')
    <!-- Body Container -->
    <div id="page-content">
        <!--سرصفحه صفحه-->
        <div class="page-header text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                        <div class="page-title">
                            <h1>تماس با ما</h1>
                        </div>
                        <!--Breadcrumbs-->
                        {{ Breadcrumbs::render('contact-us') }}
                        <!--End Breadcrumbs-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Header-->

        <!--محتوای اصلی-->
        <div class="container contact-style1">
            <livewire:LoadWidget blockId="block_52" />
        </div>
        <!--پایان محتوای اصلی-->
    </div>
    <!-- End Body Container -->

    <!--MiniCart Drawer-->
    @include('partials.miniCartDrawer')
    <!--End MiniCart Drawer-->

    @section('js')
    <script src="{{ Vite::asset('resources/js/ajax_sendmail.js') }}"></script>
    @endsection

@endsection
