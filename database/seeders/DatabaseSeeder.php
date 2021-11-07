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
        User::create([
            'name' => 'Arni',
            'email' => 'arnimaconseil@free.fr',
            'password' => bcrypt('cabpmy2021@zWEIK'),
            'is_admin' => true
        ]);

        User::create([
            'name' => 'Elias',
            'email' => 'elias.aggoune@elias-agg.com',
            'password' => bcrypt(']sUvx0Mw'),
            'is_admin' => true
        ]);

        MainCategory::truncate();
        MainCategory::create(['name' => "Recyclage"]);
        MainCategory::create(['name' => "Réparation"]);
        MainCategory::create(['name' => "Commerce"]);
        MainCategory::create(['name' => "Tout"]);

        SubCategory::truncate();
        SubCategory::create(['name' => 'Neuf']);
        SubCategory::create(['name' => 'Occasion']);
        SubCategory::create(['name' => 'Neuf & Occasion']);
    }
}
