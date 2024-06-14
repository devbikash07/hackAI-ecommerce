<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
            [
                'user_id' => 1,
                'font_id' => 1,
                'rating' => 5,
                'comment' => 'Excellent font, very readable!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'font_id' => 2,
                'rating' => 4,
                'comment' => 'Good font, but could use more styles.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
