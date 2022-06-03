<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id'=> rand(1,10),
            'title'=> $this->faker->sentence(2),
            'featured'=> $this->faker->imageUrl(1280,720) ,
            'date_of_course'=> now(),
            'place_of_course'=> $this->faker->sentence(1),
            'description'=> $this->faker->text(400),
            'is_banner'=> 0,
            'status'=> 1,
        ];
    }
}
