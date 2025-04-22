<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Instrument;

class InstrumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $instruments = [
            ['name' => 'Guitar', 'type' => 'String', 'price' => 299.99],
            ['name' => 'Piano', 'type' => 'Keyboard', 'price' => 499.99],
            ['name' => 'Violin', 'type' => 'String', 'price' => 199.99],
            ['name' => 'Flute', 'type' => 'Wind', 'price' => 99.99],
            ['name' => 'Drum Set', 'type' => 'Percussion', 'price' => 399.99],
            ['name' => 'Trumpet', 'type' => 'Brass', 'price' => 149.99],
            ['name' => 'Saxophone', 'type' => 'Wind', 'price' => 299.99],
            ['name' => 'Cello', 'type' => 'String', 'price' => 349.99],
            ['name' => 'Clarinet', 'type' => 'Wind', 'price' => 129.99],
            ['name' => 'Harp', 'type' => 'String', 'price' => 799.99],
        ];

        foreach ($instruments as $instrument) {
            Instrument::create($instrument);
        }
    }
}