<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Business;
use App\Models\MainCategory;
use App\Models\SubCategory;
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
        User::create([
            'name' => 'Elias',
            'email' => 'elias.aggoune@elias-agg.com',
            'password' => bcrypt('!password'),
            'is_admin' => true
        ]);
        User::create([
            'name' => 'Utilisateur',
            'email' => 'user@user.com',
            'password' => bcrypt('!password'),
            'is_admin' => false
        ]);

        Business::truncate();
        Business::factory(50)->create();

        MainCategory::truncate();
        MainCategory::create(['name' => "Recyclage"]);
        MainCategory::create(['name' => "Réparation"]);
        MainCategory::create(['name' => "Commerce"]);
        MainCategory::create(['name' => "Tout"]);
        // MainCategory::create(['name' => "Not Used"]);

        SubCategory::truncate();
        SubCategory::create(['name' => 'Neuf']);
        SubCategory::create(['name' => 'Occasion']);
        SubCategory::create(['name' => 'Neuf & Occasion']);
    }
}
