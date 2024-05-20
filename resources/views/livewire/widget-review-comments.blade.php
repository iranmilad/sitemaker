
<!-- Comment Form -->
<div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
    <form wire:submit.prevent="submitComment" class="product-review-form new-review-form">
        <h2 class="mb-3">نظر بدهید</h2>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                    <label for="commentName" class="d-none">نام</label>
                    <input wire:model.defer="name" type="text" id="commentName" name="commentName" placeholder="نام" required />
                    @error('name') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                    <label for="title" class="d-none">عنوان</label>
                    <input wire:model.defer="title" type="text" id="title" name="title" placeholder="عنوان" required />
                    @error('title') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <label for="commentMessage" class="d-none">پیام</label>
                    <textarea wire:model.defer="content" rows="5" id="commentMessage" name="commentMessage" placeholder="نوشتن نظر" required></textarea>
                    @error('content') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <label for="commentRating" class="d-none">امتیاز</label>
                    <div class="rating-box">
                        <input type="radio" id="star5" name="rating" value="5" wire:model="rating"/>
                        <label for="star5" title="عالی">عالی</label>
                        <input type="radio" id="star4" name="rating" value="4" wire:model="rating"/>
                        <label for="star4" title="خوب">خوب</label>
                        <input type="radio" id="star3" name="rating" value="3" wire:model="rating"/>
                        <label for="star3" title="معمولی">معمولی</label>
                        <input type="radio" id="star2" name="rating" value="2" wire:model="rating"/>
                        <label for="star2" title="ضعیف">ضعیف</label>
                        <input type="radio" id="star1" name="rating" value="1" wire:model="rating"/>
                        <label for="star1" title="خیلی ضعیف">خیلی ضعیف</label>
                    </div>
                    @error('rating') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <input type="submit" class="btn btn-lg" value="ارسال نظر">
            </div>
        </div>
    </form>
</div>
<!-- End Comment Form -->

