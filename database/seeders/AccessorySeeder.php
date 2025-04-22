<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Accessory;
use App\Models\Instrument;

class AccessorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accessories = [
            ['name' => 'Guitar Strings', 'type' => 'String', 'price' => 9.99],
            ['name' => 'Piano Bench', 'type' => 'Furniture', 'price' => 49.99],
            ['name' => 'Violin Bow', 'type' => 'String', 'price' => 29.99],
            ['name' => 'Flute Case', 'type' => 'Case', 'price' => 19.99],
            ['name' => 'Drum Sticks', 'type' => 'Percussion', 'price' => 14.99],
            ['name' => 'Trumpet Valve Oil', 'type' => 'Maintenance', 'price' => 5.99],
            ['name' => 'Saxophone Reed', 'type' => 'Reed', 'price' => 12.99],
            ['name' => 'Cello Rosin', 'type' => 'Maintenance', 'price' => 7.99],
            ['name' => 'Clarinet Ligature', 'type' => 'Accessory', 'price' => 15.99],
            ['name' => 'Harp Tuning Key', 'type' => 'Tool', 'price' => 25.99],
        ];

        $instruments = Instrument::all();

        foreach ($accessories as $index => $accessoryData) {
            // Create the accessory
            $accessory = Accessory::create($accessoryData);

            // Attach the accessory to the corresponding instrument
            // Assuming you want to attach each accessory to the instrument with the same index (1-based)
            $instrument = $instruments[$index];
            $instrument->accessories()->attach($accessory->id);
        }
    }
}
