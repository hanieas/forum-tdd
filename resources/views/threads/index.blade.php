@extends('layouts.app')
@section('content')

    <div class="content container">
        <div class="row justify-content-center text-left">
            <div class="col-md-9">
                <div class="card p-3">
                    @foreach ($threads as $thread)
                        <div class="card p-2 m-2">
                            <span>
                                <a href="#">{{$thread->creator->name}}</a> Posted:
                                 <a href={{ $thread->get_path }} dir="ltr">{{ $thread->title }}</a>
                            </span>
                        </div>
                        <article>
                            <div class="body" dir="ltr">{{ $thread->body }}</div>
                        </article>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
