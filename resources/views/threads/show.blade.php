@extends('layouts.app')
@section('content')
    <div class="content container">
        <div class="row justify-content-center text-left">
            <div class="col-md-9">
                <div class="card p-3">
                    <article >
                        <h4 dir="ltr">{{ $thread->title }}</h4>
                        <div class="body" dir="ltr">{{ $thread->body }}</div>
                    </article>
                </div>
            </div>
        </div>
        <br/>

        <div class="row justify-content-center text-left ">
            <div class="col-md-9">
                @include('threads.replies')
            </div>
        </div>

        @if(auth()->check())
        <div class="row justify-content-center text-left ">
            <div class="col-md-9">
                @include('threads.participate')
            </div>
        </div>
        @else
        <p><a href="{{route('login')}}"> Sign in </a> to participate in this discussion!</p>
        @endif

    </div>
@endsection
