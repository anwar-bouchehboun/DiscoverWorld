<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DestinationSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
             Destination::factory(10)->create();

    }
}