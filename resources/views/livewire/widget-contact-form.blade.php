<div class="formFeilds contact-form form-vertical mb-4 mb-md-0">
    <div class="section-header">
        <h2> {{ $contact->title }} </h2>
        <p>{{ $contact->description }} </p>
    </div>

    <form wire:submit.prevent="submitForm" class="contact-form">
        @csrf
        <div class="form-row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                    <input wire:model.defer="name" type="text" id="ContactFormName" name="name" class="form-control" placeholder="نام" />
                    @error('name') <span class="error_msg">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                    <input wire:model.defer="email" type="email" id="ContactFormEmail" name="email" class="form-control" placeholder="ایمیل" />
                    @error('email') <span class="error_msg">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                    <input wire:model.defer="phone" type="tel" id="ContactFormPhone" name="phone" pattern="[0-9\-]*" class="form-control" placeholder="شماره تلفن" />
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                    <input wire:model.defer="subject" type="text" id="ContactSubject" name="subject" class="form-control" placeholder="عنوان" />
                    @error('subject') <span class="error_msg">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <textarea wire:model.defer="message" id="ContactFormMessage" name="message" class="form-control" rows="5" placeholder="پیام"></textarea>
                    @error('message') <span class="error_msg">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group mailsendbtn mb-0 w-100">
                    <input wire:click="submitForm" class="btn btn-lg" type="button" value="ارسال پیام" />

                    <div class="loading"><img class="img-fluid" src="{{ asset('storage/images/icons/ajax-loader.gif') }}" alt="منتظر بمانید" width="16" height="16"></div>
                </div>
            </div>
        </div>
    </form>
    <div class="response-msg">
        @if (session()->has('message'))
            <span>{{ session('message') }}</span>
        @endif
    </div>
</div>
