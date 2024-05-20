<div>
    <ul class="publish-detail d-flex-wrap">
        <li><i class="icon anm anm-user-al"></i> <span class="opacity-75 ms-1"> ارسال شده
                توسط:</span> {{ $post->user->fullName }}</li>
        <li><i class="icon anm anm-clock-r"></i> <time datetime="{{ $post->created_at }}"> {{ \Morilog\Jalali\Jalalian::forge($post->created_at)->format('%d %B %Y') }}</time></li>
        <li><i class="icon anm anm-comments-l"></i> <a href="#comment">{{ count($post->comments) }} نظر</a></li>
        <li><i class="icon anm anm-tag-r"></i><span class="opacity-75">پست شده در</span>

            <a class="ms-1" href="{{ $post->category->link }}"> {{ $post->category->title ?? "بدون دسته بندی"}}</a>

        </li>
    </ul>

</div>
