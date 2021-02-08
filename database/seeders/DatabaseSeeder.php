<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'name' => "Admin",
            'email' => "admin@email.com",
            'password' => bcrypt("admin123"),
        ]);

        $faker = Factory::create('en_US');

        for ($i = 0; $i < 4; $i++) {
            DB::table('teams')->insert([
                'name'=>$faker->name,
                'level'=>$faker->jobTitle,
                'description'=>$faker->text(64),
            ]);
        }
    }
}
