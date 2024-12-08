<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\Property;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Seed the features table
        Feature::insert([
            ['name' => 'Gym'],
            ['name' => 'Garden'],
            ['name' => 'Garage'],
            ['name' => 'Swimming Pool'],
        ]);

        // Seed the properties table
        $property1 = Property::create([
            'title' => 'Luxury Apartment',
            'price' => 250000,
            'location' => 'Downtown Cairo',
            'space' => 1200,
            'type' => 'apartment',
            'status' => 'for_sale',
            'description' => 'A beautiful luxury apartment in the heart of the city.',
        ]);

        $property2 = Property::create([
            'title' => 'Modern House',
            'price' => 450000,
            'location' => 'New Cairo',
            'space' => 2500,
            'type' => 'house',
            'status' => 'for_rent',
            'description' => 'A spacious and modern house available for rent.',
        ]);
        // Seed images for this property
        $images = [
            'path' => 'properties/image1.jpg',
            'path' => 'properties/image2.jpg',
        ];

        foreach ($images as $image) {
            $property1->images()->create(['path' => $image]);
        }
        // Attach features to properties
        $property1->features()->sync([1, 3]); // Attach Gym and Garage
        $property2->features()->sync([2, 4]); // Attach Garden and Swimming Pool


    }
}
