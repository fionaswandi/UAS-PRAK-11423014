<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\Config;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        User::create([
            "username" => "admin",
            "email" => "admin@admin.com",
            "password" => "12345678",
            "phone" => "08976543210",
            "role" => "admin"
        ]);

        // Seeder untuk User
        for ($i = 0; $i < 20; $i++) {
            User::create([
                "username" => $faker->userName,
                "email" => $faker->unique()->safeEmail,
                "password" => "12345678",
                "phone" => "08126528732".$i,
                "role" => "user"
            ]);
        }

        // Seeder untuk Config
        Config::create([
            "name" => "site_name",
            "value" => "zbola"
        ]);

        Config::create([
            "name" => "hours",
            "value" => 5
        ]);

        Config::create([
            "name" => "payment_day",
            "value" => 3
        ]);

        Config::create([
            "name" => "maintenance",
            "value" => 0
        ]);

        // Seeder untuk Product
        for ($i = 1; $i < 15; $i++) {
            Product::create([
                "address" => "address " . $i,
                "star" => 0,
                "description" => $faker->sentence,
                "fasilitas" => $faker->words(3, true),
                "question" => $faker->sentence,
                "price" => $faker->numberBetween(55000, 75000),
                "images" => json_encode([$faker->numberBetween(1, 10) . ".png"])
            ]);
        }
    }
}
