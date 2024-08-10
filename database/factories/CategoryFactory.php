<?php

namespace Database\Factories;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;
    /**
     * Define the model's default state.
     *
     * 
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'icon' => $this->faker->imageUrl(),
            'slug' => $this->faker->slug,
            'parent_id' => null,
        ];
    }
}