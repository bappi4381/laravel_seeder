<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categoryIds = Category::pluck('id')->toArray();
        $userIds     = User::pluck('id')->toArray();

        return [
            'title'       => $this->faker->sentence(),
            'description' => $this->faker->text(),
            'user_id'     => $userIds[array_rand($userIds)],
            'category_id' => $categoryIds[array_rand($categoryIds)]
        ];
    }
}