<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    public function definition()
    {
        $categoryNames = [
            'Smartphones',
            'Laptops',
            'Tablets',
            'Wearable Devices',
            'Smart Home Devices',
            'Gaming Consoles',
            'Computer Accessories',
            'Networking Equipment',
            'Cameras & Photography',
            'Audio & Headphones',
        ];

        $name = $this->faker->unique()->randomElement($categoryNames);

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'image' => $this->faker->imageUrl(640, 480, 'technology', true),
            'is_active' => $this->faker->boolean(80),
        ];
    }
}
