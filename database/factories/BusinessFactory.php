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
        $name = ucwords($this->faker->company());

        return [
            'glyph' => mb_substr($name, 0, 1, 'utf-8'),
            'name' => $name,
            'activity' => $this->faker->word(),
            'description' => $this->faker->text(),
            'link' => 'www.' . $this->faker->word() . '.com',
            'phone' => $this->faker->phoneNumber(),
            'contact' => $this->faker->name(),
            'email' => $this->faker->email(),
            'address' => $this->faker->address(),
            'schedule' => $this->faker->time('h:m') . ' ' . $this->faker->time('h:m'),
            'main_category_id' => random_int(1, 4),
            'zipcode' => random_int(10000, 99999),
            'city' => $this->faker->city(),
            // 'main_category_id' => random_int(1, 5),
            'sub_category_id' => random_int(1, 4)
        ];
    }
}
