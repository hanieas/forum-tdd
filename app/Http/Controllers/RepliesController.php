<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Http\Request;

class RepliesController extends Controller
{
    /**
     * RepliesController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @param Thread $thread
     * @param $channel_id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Thread $thread,Request $request)
    {
        $this->validate($request,[
            'body'=>'required'
        ]);

        $thread->addReply([
            'body' => request('body'),
            'user_id' => auth()->user()->id,
        ]);

        return back();
    }
}
