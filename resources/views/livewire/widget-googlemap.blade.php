<!-- google-map.blade.php -->

<div class="map-section ratio ratio-16x9">
    <iframe class="rounded-5" src="https://www.google.com/maps/embed?pb={{ urlencode($googleMap->address) }}" allowfullscreen="" height="650"></iframe>
    <div class="map-section-overlay-wrapper">
        <div class="map-section-overlay rounded-0">
            <h3>فروشگاه ما</h3>
            <div class="content mb-3">
                <p class="mb-2">{{ $googleMap->address }}</p>
                <p>
                    @php
                        $workingHours = $googleMap->working_hours;
                        foreach($workingHours as  $line) {
                            echo $line.'</br>';
                        }
                    @endphp
                </p>
            </div>
            <p><a href="https://www.google.com/maps?daddr={{ urlencode($googleMap->address) }}" class="btn btn-secondary btn-sm">دریافت مسیرها</a></p>
        </div>
    </div>
</div>
