<?php

namespace Tests\Feature;

use App\Models\Thread;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Reply;

class ReplyTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void


    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
     * */
    /** @test */
    function has_owner(){
        $reply = Reply::factory()->create(['thread_id'=>(Thread::factory()->create())->id]);
        $this->assertInstanceOf('App\Models\User', $reply->owner);
    }
}
