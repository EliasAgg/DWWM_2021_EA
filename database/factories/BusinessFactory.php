<?php

namespace Database\Factories;

use App\Models\Business;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BusinessFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Business::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'glyph' => Str::upper(($this->faker->randomLetter())),
            'name' => $this->faker->word() . ' ' . $this->faker->word(),
            'activity' => $this->faker->word(),
            'description' => $this->faker->text(),
            'link' => 'www.' . $this->faker->word() . '.com',
            'phone' => random_int(1000000000, 9999999999),
            'contact' => $this->faker->name(),
            'email' => $this->faker->email(),
            'address_id' => random_int(1, 20),
            'schedule_id' => random_int(1, 20),
            'main_category_id' => random_int(1, 4),
            'sub_category_id' => random_int(1, 4)
        ];
    }
}
