<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $b1 = \App\Models\Building::factory()->create();

        $b2 = \App\Models\Building::factory()->create();

        $c1 = \App\Models\Category::factory()
            ->create([
                'building_id' => $b1->id,
            ]);
    }
}
