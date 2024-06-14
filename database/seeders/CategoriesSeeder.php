<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Serif',
                'description' => 'Fonts with small lines or strokes attached to the end of larger strokes in a letter or symbol.',
                'created_at' => now(),
            ],
            [
                'name' => 'Sans Serif',
                'description' => 'Fonts without the small projecting features called "serifs" at the end of strokes.',
                'created_at' => now(),
            ],
            [
                'name' => 'Script',
                'description' => 'Fonts that mimic the stroke of a pen or brush.',
                'created_at' => now(),
            ],
        ]);
    }
}
