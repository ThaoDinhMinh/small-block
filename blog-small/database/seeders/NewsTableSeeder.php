<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Fake;
use Illuminate\Support\Facades\DB;


class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fake = Fake::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('news')->insert([
                "title" => $fake->name,
                "content" => $fake->sentence(10)
            ]);
        }
    }
}
