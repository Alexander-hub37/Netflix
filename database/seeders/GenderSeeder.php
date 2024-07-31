<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genders = [
            'Action',
            'Comedy',
            'Drama',
            'Horror',
            'Science Fiction',
            'Fantasy',
            'Romance',
            'Thriller',
            'Documentary',
            'Adventure'
        ];

        foreach ($genders as $gender) {
            DB::table('genders')->insert([
                'name' => $gender,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
