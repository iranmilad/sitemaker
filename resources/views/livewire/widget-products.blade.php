<div>

    @if (isset($options['type']) && $options['type'] === 'simple')
    <section class="section product-slider py-0">
        <div class="container container-1330">
            <div class="section-header">
                <h2>{{ $options['title'] }}</h2>
            </div>

            <div class="product-slider-4items gp15 arwOut5 grid-products" dir="ltr">
                @foreach ($products as $product)
                    <div class="item col-item">
                        <x-product  :product="$product" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @foreach ($products as $product)
        <x-product-quickview :product="$product" />
    @endforeach
    @elseif(isset($options['type']) && $options['type'] === 'series')
        <section class="mt-5 tw-flex tw-flex-col lg:tw-flex-row tw-items-center tw-justify-between">
            <h2 class="text-right fw-bold fs-6">{{ $options['title'] }}</h2>
            <div class="tw-w-full tw-h-1 tw-bg-gray-300 tw-space-x-0 tw-mx-14 tw-hidden "></div>
            <div class="tw-flex tw-flex-row-reverse tw-items-center">
                <a href="{{ $options['link'] }}"
                    class="tw-text-sm tw-px-5 tw-py-[10px] tw-bg-white text-[#2d365d] tw-border-2 tw-border-solid border-dark tw-rounded-xl tw-w-max hover:tw-bg-black hover:tw-text-white ">مشاهده
                    همه</a>
                <button class="" id="discounted-products-next"><i class="fa fa-chevron-left"></i></button>
                <button class="" id="discounted-products-prev"><i class="fa fa-chevron-right"></i></button>
            </div>
        </section>
        <div class="swiper discountedSwiper tw-mt-6">
            <div class="swiper-wrapper tw-flex tw-items-stretch">
                @forelse ($products as $product)

                    <div class="swiper-slide index-product">
                        @isset($product->hover_img)
                        <x-product name="{{ $product->title }}"
                            price="{{ $product->price }}"
                            link="/product/{{ $product->id }}"
                            image="{{ asset($product->img) }}"
                            image2="{{ asset($product->hover_img) }}"
                            discount="{{ $product->discountPercentage  }}"
                            discountedPrice="{{ $product->sale_price  }}"
                        />
                        @else
                        <x-product name="{{ $product->title }}"
                            price="{{ $product->price }}"
                            link="/product/{{ $product->id }}"
                            image="{{ asset($product->img) }}"
                            discount="{{ $product->discountPercentage  }}"
                            discountedPrice="{{ $product->sale_price  }}"
                        />
                        @endisset

                    </div>

                @empty
                    <p> هیچ محصولی یافت نشد</p>
                @endforelse
            </div>
        </div>
    @elseif(isset($options['type']) && $options['type'] ==='special')
        <div class="best-suggestions tw-py-10 tw-mt-16 tw-rounded-3xl tw-p-5 tw-px-8 tw-flex tw-flex-col">
            <!-- Slider:start -->
            <div class="tw-flex  tw-flex-col md:tw-flex-row tw-w-full tw-ml-4 tw-justify-center md:tw-justify-between tw-items-center">
                <h4 class="tw-font-bold tw-text-white tw-text-lg md:tw-text-2xl">
                    {{ $options['title'] }}
                </h4>
                <div class="tw-flex">
                    <div class="tw-flex">
                        <button class="" id="suggestions-products-prev"><i class="fa fa-chevron-right"></i></button>
                        <button class="" id="suggestions-products-next"><i class="fa fa-chevron-left"></i></button>
                    </div>
                    <a href="{{ $options['link'] }}" class="tw-text-sm tw-px-3 tw-py-2 tw-bg-transparent tw-text-white text-[#2d365d] tw-border-2 tw-border-solid border-white tw-rounded-xl tw-w-max hover:tw-bg-white hover:tw-text-[#ff3a4e]">مشاهده همه</a>
                </div>
            </div>
            <div class="swiper bestSuggestionsSlider tw-w-full tw-h-full tw-mt-4">
                <div class="swiper-wrapper tw-items-stretch">
                    @foreach($products as $product)
                    <div class="swiper-slide tw-bg-white tw-rounded-xl index-product">
                        @isset($product->hover_img)
                        <x-product name="{{ $product->title }}"
                            price="{{ $product->price }}"
                            link="/product/{{ $product->id }}"
                            image="{{ asset($product->img) }}"
                            image2="{{ asset($product->hover_img) }}"
                            discount="{{ $product->discountPercentage  }}"
                            discountedPrice="{{ $product->sale_price  }}"
                        />
                        @else
                        <x-product name="{{ $product->title }}"
                            price="{{ $product->price }}"
                            link="/product/{{ $product->id }}"
                            image="{{ asset($product->img) }}"
                            discount="{{ $product->discountPercentage  }}"
                            discountedPrice="{{ $product->sale_price  }}"
                        />
                        @endisset
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Slider:end -->
        </div>

    @endif

</div>
