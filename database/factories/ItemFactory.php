<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category = Category::all()->random();
        return [
            'category_id' => $category->id,
            'name' => $this->faker->name,
            'image' => $this->faker->randomElement([
                '/assets/img/menu/caesar.jpg',
                '/assets/img/menu/bread-barrel.jpg',
                '/assets/img/menu/cake.jpg',
                '/assets/img/menu/greek-salad.jpg',
                '/assets/img/menu/lobster-bisque.jpg',
                '/assets/img/menu/lobster-roll.jpg',
                '/assets/img/menu/mozzarella.jpg',
                '/assets/img/menu/spinach-salad.jpg',
                '/assets/img/menu/tuscan-grilled.jpg',
            ]),
            'description' => $this->faker->paragraph(), 
            'price' => $this->faker->numberBetween($min = 500, $max = 6000)
        ];
    }
}
