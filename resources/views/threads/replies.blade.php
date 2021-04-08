@foreach ($thread->replies as $reply)
    <div class="card p-3">
        <div class="card p-2 m-2 header">
            <span>
                <a href="#">{{ $reply->owner->name }} </a> Said {{ $reply->created_at->diffForHumans() }}
            </span>
        </div>
        <article>
            <div class="body" dir="ltr">{{ $reply->body }}</div>
        </article>
    </div>
    <br />
@endforeach
