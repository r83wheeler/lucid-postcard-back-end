<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'path'=>$this->faker->imageUrl($width = 640, $height = 480), // 'http://lorempixel.com/640/480/'
            'user_id'=>User::all()->random()->id
        ];
    }
}
