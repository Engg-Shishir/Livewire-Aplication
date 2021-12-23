<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// Import this three alias
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class clientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // First create seeder `php artisan make:seeder StudentSeeder`
        // This create 10 clients.That was call from DatabaseSeeder.
        // At last run this 2 command
            // composer dump-autoload
            // php artisan db:seed
            
        $faker = Faker::create();
    	foreach (range(1,10) as $index) {
            DB::table('clients')->insert([
                'name' => $faker->name,
            ]);
        }
    }
}
