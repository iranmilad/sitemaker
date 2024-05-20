<div>
    <div class="blog-comment section">
        <h2 class="mb-4">نظرات ({{ $post->commentsCount() }})</h2>
        <ol class="comments-list">
            @foreach($post->comments as $comment)
            <li class="comments-items">
                <div class="comments-item d-flex w-100">
                    <div class="flex-shrink-0 comment-img">
                        <img class="blur-up lazyload" data-src="{{ asset('/images/users/User-Profile.png') }}"
                            src="{{ asset('/images/users/User-Profile.png') }}" alt="{{ $comment->name }}" width="200"
                            height="200" />
                    </div>
                    <div class="flex-grow-1 comment-content">
                        <div class="comment-user d-flex-center justify-content-between">
                            <div class="comment-author fw-600">{{ $comment->name }}</div>
                            <div class="comment-date opacity-75">
                                <time datetime="{{ $comment->created_at }}">{{ \Morilog\Jalali\Jalalian::forge($comment->created_at)->format('%d %B %Y') }}</time>
                            </div>
                        </div>
                        <div class="comment-text my-2">{{ $comment->content }}</div>
                        <div class="comment-text my-2">{{ $comment->email }}</div>
                        <div class="comment-reply">
                            <button type="button" class="text-link text-decoration-none d-none"><i
                                    class="icon anm anm-reply ms-2"></i>پاسخ </button>
                        </div>
                    </div>
                </div>
                <!-- Replies -->
                @foreach($comment->replies as $reply)
                <div class="comments-item d-flex w-100">
                    <div class="flex-shrink-0 comment-img">
                        <img class="blur-up lazyload" data-src="{{ asset('/images/users/User-Profile.png') }}"
                            src="{{ asset('/images/users/User-Profile.png') }}" alt="{{ $reply->name }}" width="200"
                            height="200" />
                    </div>
                    <div class="flex-grow-1 comment-content">
                        <div class="comment-user d-flex-center justify-content-between">
                            <div class="comment-author fw-600">{{ $reply->name }}</div>
                            <div class="comment-date opacity-75">
                                <time datetime="{{ $reply->created_at }}">{{ \Morilog\Jalali\Jalalian::forge($reply->created_at)->format('%d %B %Y') }}</time>
                            </div>
                        </div>
                        <div class="comment-text my-2">{{ $reply->content }}</div>
                        <div class="comment-reply">
                            <button type="button" class="text-link text-decoration-none"><i
                                    class="icon anm anm-reply ms-2"></i>پاسخ </button>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- End Replies -->
            </li>
            @endforeach
        </ol>
    </div>

    <!-- Comment Form -->
    <div class="formFeilds comment-form form-vertical">
        <form wire:submit.prevent="submitComment">
            <h2 class="mb-3">نظر بدهید</h2>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="commentName" class="d-none">نام</label>
                        <input wire:model.defer="name" type="text" id="commentName" name="commentName"
                            placeholder="نام" required />
                        @error('name') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="commentEmail" class="d-none">ایمیل</label>
                        <input wire:model.defer="email" type="email" id="commentEmail" name="commentEmail"
                            placeholder="ایمیل" required />
                        @error('email') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <label for="commentMessage" class="d-none">پیام</label>
                        <textarea wire:model.defer="content" rows="5" id="commentMessage" name="commentMessage"
                            placeholder="نوشتن نظر" required></textarea>
                        @error('content') <span class="error">{{ $message }}</span> @enderror
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

</div>
