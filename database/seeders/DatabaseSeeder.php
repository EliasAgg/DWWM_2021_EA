<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Business;
use App\Models\MainCategory;
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
        User::truncate();
        User::factory(10)->create();

        Business::truncate();
        Business::factory(50)->create();

        MainCategory::create(['name' => "Recyclage"]);
    } 
}
