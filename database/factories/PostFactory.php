<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Post;
use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function definition(): array
    {

        $title = fake()->sentence();
        $slug = Str::slug($title);
        return
            [
                'country_id' => Country::inRandomOrder()->first()->id,
                'title' => $title,
                'slug' => $slug,
                'content' => fake()->paragraph(),
                "user_id" => User::inRandomOrder()->first()->id,
            ];
    }
}
