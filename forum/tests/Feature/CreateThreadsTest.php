<?php

namespace Tests\Feature;

use App\Models\Thread;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;


class CreateThreadsTest extends TestCase
{
    use DatabaseMigrations;
    use HasFactory;

    /** @test */
/*
    function guest_cannot_create_threads()
    {
       // $response=$this->expectException('Illuminate\Auth\AuthenticationError');
        $thread = Thread::factory()->make();
        $this->post('/threads', $thread->toArray());
    }
*/


/*
    function authenticated_users_can_create_new_threads()
    {

        $user = User::factory()->create();
        $this->actingAs($user);

        $thread = Thread::factory()->make();
        $this->post('/threads', $thread->toArray());

        $response = $this->get($thread->path())->assertSee($thread->title);
    }

        /*
         * function authenticated_users_can_create_new_threads()
        {
            //So, after some blood and sweat the test seems to work, the results are just negative
            $thread=Thread::factory()->make();
            //$thread=Thread::factory()->raw();
            //// $thread=Thread::find(1);

            //dd($thread->id);---->this artificial thread doens't have an id?
            $this->post('/threads', $thread->toArray());
            $this->get('/threads')->assertSee($thread->title);

            //->assertSee($thread->title);
            //->assertSee($thread->body);
        }
        */

}
