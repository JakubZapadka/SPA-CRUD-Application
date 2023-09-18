<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Entry;

class EntriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Entry::factory()->count(10)->create();
    }
}
