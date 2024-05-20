<div>
    <div class="widget-title">
        <h2>برچسب های محبوب</h2>
    </div>
    <div class="widget-content">
        @if (count($post->tags))
            <ul class="tags-list d-flex-wrap">
                @foreach ($post->tags as $tag)
                    <li class="item"><a class="rounded-3" href="{{ $tag->link }}">{{ $tag->name }}</a></li>
                @endforeach
            </ul>
        @else
        بدون برچسب
        @endif
    </div>
</div>
