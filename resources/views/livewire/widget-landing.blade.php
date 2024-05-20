<div>
    @if (isset($options['type']) && $options['type'] === 'image')

        <section class="section featured-content style1 pb-0">
            <div class="container container-1330">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="d-flex align-items-stretch justify-content-between w-100 flex-md-row flex-column">
                            <div
                                class="f-item fl-1 d-flex w-100 align-items-center justify-content-center bg-light order-md-0 order-xl-0 order-sm-1 order-lg-0 order-1">
                                <div class="f-text order-3 text-center px-4 mx-sm-5 mx-md-4 py-4 py-sm-5 py-md-4">
                                    <h3 class="fs-3 mb-3 mb-md-4 text-black">{{ $landing->title }}</h3>
                                    <div class="rte rte-setting d-flex mb-4 pb-md-2">
                                        <p class="text-medium">{{ $landing->description }}</p>
                                    </div>
                                    <a href="{{ $landing->btnLink1 }}" class="btn btn-lg mt20"> {{ $landing->cap1 }} </a>
                                </div>
                            </div>
                            <div class="f-item fl-1 d-flex w-100 align-items-center">
                                <div class="f-image order-2">
                                    <img class="blur-up lazyloaded"
                                        data-src="{{ $landing->image }}"
                                        src="{{ $landing->image }}" alt = "تصویر"
                                        title="" width="750" height="625" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endif
</div>
