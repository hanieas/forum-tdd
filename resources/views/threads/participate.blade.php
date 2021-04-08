<form method="post" action="{{route('add-reply',['thread'=>$thread->id])}}">
    {{csrf_field()}}
    <textarea name="body" cols="100" rows="5" placeholder="Have something to say?"></textarea>
    <button class="btn btn-primary" type="submit">Post</button>
</form>
