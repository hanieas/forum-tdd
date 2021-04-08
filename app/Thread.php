<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected  $guarded=[];

    /*
     * append a new feature to threads
     */
    protected $append = [
        'get_path',
        'post_path'
    ];


    /**
     * get path appended attribute which used in get requests
     *
     * @return string
     */
    public function getGetPathAttribute()
    {
        return "/threads/{$this->channel->slug}/{$this->id}";
    }

    /**
     * get a post path appended attribute which used in post requests to specific resource
     *
     * @return string
     */
    public function getPostPathAttribute()
    {
        return "/threads/{$this->id}";
    }

    /**
     * a list of thread replies
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function replies()
    {
        return $this->hasMany(Reply::class,'thread_id');
    }

    /**
     * return a user that thread belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    /**
     * add a new reply to thread replies
     *
     * @param $reply
     */
    public function addReply($reply)
    {
        $this->replies()->create($reply);
    }

    /**
     * return the channel that thread belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function channel()
    {
        return $this->belongsTo(Channel::class,'channel_id');
    }
}
