@extends('layouts.app')
@section('title', 'بلاگ')
@section('body', 'blog-page')


@section('content')
    <!-- Body Container -->
    <div id="page-content">
        <!--سرصفحه صفحه-->
        <div class="page-header text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                        <div class="page-title">
                            <h1>بلاگ </h1>
                        </div>
                        <!--Breadcrumbs-->
                        <div class="breadcrumbs"><a href="/home" title="بازگشت به صفحه اصلی">صفحه اصلی</a><span
                                class="title"><i class="icon anm anm-angle -left-l"></i>وبلاگ</span><span
                                class="main-title fw-bold"><i class="icon anm anm-angle-left-l"></i>مطالب  </span>
                        </div>
                        <!--End Breadcrumbs-->
                    </div>
                </div>
            </div>
        </div>
        <!--End Page Header-->

        <!--محتوای اصلی-->
        <div class="container">
            <!--Toolbar-->
            <div class="toolbar toolbar-wrapper blog-toolbar">
                <div class="row align-items-center">
                    <livewire:LoadWidget blockId="block_17" />

                    <div class="d-none col-12 col-sm-6 col-md-6 col-lg-6 text-left filters-toolbar-item d-flex justify-content-between justify-content-sm-end">
                        <div class="filters-item d-flex align-items-center">
                            <label for="ShowBy" class="mb-0 ms-2">نمایش:</label>
                            <select name="ShowBy" id="ShowBy" class="filters-toolbar-sort">
                                <option value="title-ascending" selected="selected">10</option>
                                <option>15</option>
                                <option>20</option>
                                <option>25</option>
                                <option>30</option>
                            </select>
                        </div>
                        <div class="filters-item d-flex align-items-center me-3">
                            <label for="SortBy" class="mb-0 ms-2">مرتب‌سازی:</label>
                            <select name="SortBy" id="SortBy" class="filters-toolbar-sort">
                                <option value="title-ascending" selected="selected">ویژه</option>
                                <option>جدیدترین</option>
                                <option>بیشترین نظرات</option>
                                <option>تاریخ انتشار</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Toolbar-->


            <!-- Blog-->
            <livewire:LoadWidget blockId="block_15" />
            <!--End  Blog-->



        </div>
        <!--پایان محتوای اصلی-->
    </div>
    <!-- End Body Container -->

    <!--MiniCart Drawer-->
    @include('partials.miniCartDrawer')
    <!--End MiniCart Drawer-->

@endsection
