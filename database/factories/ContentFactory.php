<?php

namespace Database\Factories;

use App\Models\Content;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContentFactory extends Factory
{

    protected $model=Content::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


        return [
            'name' => $this->faker->title(20),
            'content' => $this->faker->text(300),
            'number' => 3
        ];
    }
}
