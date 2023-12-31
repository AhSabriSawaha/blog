<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [
            'title' => $this -> faker-> sentence(2),
            'body' => $this -> faker -> paragraph(10),
            'summary' => $this -> faker -> paragraph(1),
            'thumbnail' => 'thumbnails/pexel.jpg',
            'category_id'=> Category::factory(),
            'user_id'=> User::factory(),
            'slug'=> $this -> faker -> slug(),
        ];
    }
}
