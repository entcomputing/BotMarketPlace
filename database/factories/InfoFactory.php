<?php

namespace Database\Factories;

use App\Models\Info;
use Illuminate\Database\Eloquent\Factories\Factory;

class InfoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Info::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name,
            "phone" => $this->faker->unique()->phoneNumber,
            "phone_alt" => $this->faker->unique()->phoneNumber,
            "email" => $this->faker->unique()->email,
            "about" => $this->faker->paragraph(10),
            "privacy_policy" => $this->faker->paragraph(10),
            "logo" =>  $this->faker->imageUrl(100,100),
            "developed_by" => $this->faker->name,
            "version" => "v1.0",
            "address" => $this->faker->address,
        ];
    }
}
