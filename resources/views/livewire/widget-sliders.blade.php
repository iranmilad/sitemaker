<div>
    @if (isset($options['type']) && $options['type'] === 'template1')
        <!-- Slider:start -->
        @include('partials.slideshow.slider1')
        <!-- Slider:end -->
    @elseif (isset($options['type']) && $options['type'] === 'template2')
        <!-- Slider:start -->
        @include('partials.slideshow.slider2')
        <!-- Slider:end -->
    @elseif (isset($options['type']) && $options['type'] === 'template3')
        <!-- Slider:start -->
        @include('partials.slideshow.slider3')
        <!-- Slider:end -->
    @endif
</div>
