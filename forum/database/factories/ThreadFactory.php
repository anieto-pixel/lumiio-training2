<?php
namespace Database\Factories;
//use App\Models\Channel;
use App\Models\User;
use Illuminate\Broadcasting\Channel; //<----this is the one I just added
use Illuminate\Database\Eloquent\Factories\Factory;

class ThreadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'channel_id' =>mt_rand(),
            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraph()
        ];
    }
}
