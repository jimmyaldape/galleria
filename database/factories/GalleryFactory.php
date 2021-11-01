<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => Str::ucfirst($this->faker->word),
            'description' => $this->faker->optional->sentence,
            'location' => $this->faker->optional->city,
            'enabled' => true,
        ];
    }

    public function folder(string $folderName)
    {
        return $this->state([
            'folder' => $folderName
        ]);
    }

    public function enabled(bool $isGalleryEnabled = true)
    {
        return $this->state([
            'enabled' => $isGalleryEnabled
        ]);
    }
}
