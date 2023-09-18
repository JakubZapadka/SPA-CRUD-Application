<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Entry;

class EntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Entry::truncate();
        Entry::factory()->count(10)->create();
    }
}
