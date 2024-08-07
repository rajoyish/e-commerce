<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    public function definition()
    {
        $productNames = [
            'iPhone 13 Pro Max',
            'MacBook Pro 16-inch',
            'iPad Pro 12.9-inch',
            'Apple Watch Series 7',
            'Google Nest Hub Max',
            'PlayStation 5',
            'Logitech MX Master 3',
            'Netgear Nighthawk AX12',
            'Canon EOS R5',
            'Sony WH-1000XM4',
            'Samsung Galaxy S21 Ultra',
            'Dell XPS 13',
            'Microsoft Surface Pro 7',
            'Fitbit Charge 5',
            'Amazon Echo Show 10',
            'Xbox Series X',
            'Razer DeathAdder V2',
            'TP-Link Archer AX6000',
            'Nikon Z6 II',
            'Bose QuietComfort 35 II',
            'OnePlus 9 Pro',
            'HP Spectre x360',
            'Lenovo ThinkPad X1 Carbon',
            'Garmin Forerunner 945',
            'Google Nest WiFi',
            'Nintendo Switch OLED',
            'Corsair K95 RGB Platinum',
            'Asus ROG Rapture GT-AX11000',
            'Fujifilm X-T4',
            'Jabra Elite 85t',
            'Oppo Find X3 Pro',
            'Acer Predator Helios 300',
            'Alienware Aurora R12',
            'Withings Steel HR Sport',
            'Ring Video Doorbell Pro 2',
            'SteelSeries Arctis 7',
            'Linksys Velop MX10',
            'Panasonic Lumix GH5',
            'Sennheiser HD 660 S',
            'Huawei P50 Pro',
            'Razer Blade 15',
            'MSI GE66 Raider',
            'Garmin Venu 2',
            'Arlo Pro 4',
            'Roccat Vulcan 120 Aimo',
            'Asus ZenWiFi AX',
            'Olympus OM-D E-M1 Mark III',
            'Bang & Olufsen Beoplay H95',
        ];

        $name = $this->faker->randomElement($productNames);
        $slug = Str::slug($name);

        return [
            'category_id' => $this->faker->numberBetween(1, 10),
            'brand_id' => $this->faker->numberBetween(1, 5),
            'name' => $name,
            'slug' => $slug,
            'images' => json_encode([$this->faker->imageUrl(640, 480, 'technology', true), $this->faker->imageUrl(640, 480, 'technology', true)]),
            'description' => $this->faker->paragraphs(3, true),
            'price' => $this->faker->randomFloat(2, 100, 2000),
            'is_active' => $this->faker->boolean(90),
            'is_featured' => $this->faker->boolean(30),
            'in_stock' => $this->faker->boolean(80),
            'on_sale' => $this->faker->boolean(20),
        ];
    }
}
