<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    protected $model = Brand::class;

    public function definition()
    {
        // Define a list of technology-based brand names
        $brands = [
            'Apple',
            'Samsung',
            'Microsoft',
            'Sony',
            'Dell',
        ];

        // Select a random brand from the list
        $brand = $this->faker->unique()->randomElement($brands);

        return [
            'name' => $brand,
            'slug' => Str::slug($brand),
            'image' => $this->faker->imageUrl(640, 480, 'technology', true, $brand),
            'is_active' => $this->faker->boolean(90), // 90% chance of being true
        ];
    }
}
