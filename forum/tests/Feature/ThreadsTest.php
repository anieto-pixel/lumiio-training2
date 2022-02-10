<?php

namespace Tests\Feature;
use App\Models;
use App\Models\Thread;
use App\Models\Reply;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ThreadsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use DatabaseMigrations;
    use HasFactory;
   // protected $thread;//not fully get this needing to be protected instead of private?


    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->thread =Thread::factory()->create(); //how is this usable? no thread defined!
    }

    /** @test */
    public function user_can_see_all_threads()
    {
        $response=$this->get('/threads')->assertSee($this->thread->title);
        $response=$this->get('/threads')->assertSee($this->thread->body);

        /* $response->assertStatus(200);*/
    }
    /** @test */
    public function user_can_see_single_thread()
    {
        $response=$this->get('/threads/'.$this->thread->id)->assertSee($this->thread->title);
        $response=$this->get('/threads/'.$this->thread->id)->assertSee($this->thread->body);
    }

    /** @test */
    public function user_can_see_replies_to_thread()
    {
        $reply=Reply::factory()->create(['thread_id'=>$this->thread->id]);
        $this->get('/threads/'. $this->thread->id)->assertSee($reply->body);
    }

    /** @test */
    public function thread_has_creator()
    {
        $this->assertInstanceOf('App\Models\User', $this->thread->owner);
    }

    /** @test */
    public function thread_can_add_replies()
    {
        $this->thread->addReply([
            'body'=>'Foobar',
            'user_id'=>1,
            'thread_id'=>$this->thread->id
        ]);
        $this->assertCount(1, $this->thread->replies);
    }

    /** @test */
    public function thread_has_replies()
    {
        $reply=Reply::factory()->create(['thread_id'=>$this->thread->id]);
       $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->thread->replies);
    }



}
