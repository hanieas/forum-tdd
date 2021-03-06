<?php

namespace Tests\Unit;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class threadTest extends TestCase
{
    use DatabaseMigrations;

    protected $thread;

    public function setUp():void
    {
        parent::setUp();

        $this->thread = create('App\Thread');
    }

    /** @test */
   function it_has_replies()
   {
       $this->assertInstanceOf(Collection::class,$this->thread->replies);
   }

   /** @test */
    function it_has_a_creator()
    {
        $this->assertInstanceOf('App\User',$this->thread->creator);
    }

    /** @test */
    public  function it_can_add_a_reply()
    {
        $this->thread->addReply([
            'body' => 'FooBar',
            'user_id' => 1
        ]);

        $this->assertCount(1,$this->thread->replies);
    }

    /** @test */
    function it_has_a_channel()
    {
        $this->assertInstanceOf('App\Channel', $this->thread->channel);
    }

}
