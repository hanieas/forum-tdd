@extends('layouts.app')
@section('content')

    <div class="content container">
        <div class="row justify-content-center text-left">
            <div class="col-md-9">
                <div class="card p-3">
                        <div class="card p-2 m-2">
                           Create New Thread
                        </div>

                        <div class=" p-1 m-2" dir="ltr">
                            <form method="post" action="{{route('threads.store')}}">
                                {{csrf_field()}}
                                <input class="form-control m-1" type="text" placeholder="Title" name="title"/>
                                <textarea class="form-control m-1" name="body" rows="8" cols="90" placeholder="Body"></textarea>
                                <button type="submit" class="btn btn-primary m-1">Publish</button>
                            </form>

                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
