<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

class PostFactory extends Factory
{
    // CLASE QUE VAMOS A SEMBRAR
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'body' => $this->faker->paragraph(50),
        ];
    }
}

// use App\Models\Post;
// use faker\Generator as Faker;
// use Illuminate\Support\Str;

// $factory->define(Post::class, function (Faker $faker){
//     $title = $faker->sentence;
//     return [
//         'title' => $title,
//         'slug' => Str::slug($title),
//         'body' => $faker->text
//     ];
// });

