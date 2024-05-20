<div class="contact-details bg-block">
    <h3 class="mb-3 fs-5">اطلاعات ذخیره</h3>
    <ul class="list-unstyled">
        <li class="mb-2 address">
            <strong class="d-block mb-2">آدرس :</strong>
            <p><i class="icon anm anm-map-marker-al ms-2 d-none"></i> {{ $contactInfo->address }}</p>
        </li>
        <li class="mb-2 phone"><strong>تلفن :</strong><i class="icon anm anm-phone ms-2 d-none"></i>
            <a href="tel:{{ $contactInfo->phone }}" dir="ltr">{{ $contactInfo->phone }}</a></li>
        <li class="mb-0 email"><strong dir="ltr">:ایمیل </strong><i
                class="icon anm anm-envelope-l ms-2 d-none"></i> <a
                href="mailto:{{ $contactInfo->email }}">{{ $contactInfo->email }}</a></li>
    </ul>
    <hr>
    <div class="open-hours">
        <strong class="d-block mb-2">ساعت کاری</strong>
        <p class="lh-lg">
            @php
                $workingHours = $contactInfo->working_hours;
                foreach($workingHours as  $line) {
                    echo $line.'</br>';
                }
            @endphp
        </p>
    </div>
    <hr>
    <div class="follow-us d-none">
        <label class="d-block mb-3"><strong>در ارتباط بمانید</strong></label>
        <ul class="list-inline social-icons">
            <!-- افزودن آیکون‌های شبکه‌های اجتماعی -->
        </ul>
    </div>
</div>
