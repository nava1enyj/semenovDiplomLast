<?php

namespace Database\Seeders;

use App\Models\Content;
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
        Content::factory(50)->create();
        // \App\Models\User::factory(10)->create();
    }
}
