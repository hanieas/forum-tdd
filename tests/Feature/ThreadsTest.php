<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ThreadsTest extends TestCase
{
    use DatabaseMigrations;

    protected  $thread;

    public function setUp() :void
    {
        parent::setUp();

        $this->thread = create('App\Thread');
    }

    /** @test */
    public function a_user_can_view_all_threads()
    {
        $response = $this->get('/threads');

        $response->assertSee($this->thread->title);

    }

    /** @test */
    public function a_user_can_view_single_thread()
    {

        $response = $this->get($this->thread->get_path);

        $response->assertSee($this->thread->title);

    }

    /** @test */
    public function a_user_can_read_replies_associated_with_a_thread()
    {
        $reply  = create('App\Reply',['thread_id'=>$this->thread->id]);

        $response = $this->get($this->thread->get_path);

        $response->assertSee($reply->body);
    }

}
