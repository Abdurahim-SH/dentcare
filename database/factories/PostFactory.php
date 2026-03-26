<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        return [
            'category_id'=>rand(1,5),
            'title_uz'=>$this->faker->sentence,
            'title_ru'=>$this->faker->sentence,
            'title_en'=>$this->faker->sentence,
            'description_uz'=>$this->faker->sentence,
            'description_ru'=>$this->faker->sentence,
            'description_en'=>$this->faker->sentence,
            'content_uz'=>$this->faker->sentence,
            'content_ru'=>$this->faker->sentence,
            'content_en'=>$this->faker->sentence,
            'image'=>'rasm.png',
            'view'=>rand(0,50),
            'special_new'=>rand(0,1),
        ];
    }
}
