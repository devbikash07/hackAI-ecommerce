<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FontsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fonts')->insert([
            [
                'name' => 'Times New Roman',
                'designer' => 'Stanley Morison',
                'foundry' => 'Monotype',
                'price' => 49.99,
                'category_id' => 1,
                'file_path' => 'path/to/times_new_roman.ttf',
                'preview_image' => 'path/to/preview_times_new_roman.jpg',
                'created_at' => now(),
            ],
            [
                'name' => 'Arial',
                'designer' => 'Robin Nicholas',
                'foundry' => 'Monotype',
                'price' => 29.99,
                'category_id' => 2,
                'file_path' => 'path/to/arial.ttf',
                'preview_image' => 'path/to/preview_arial.jpg',
                'created_at' => now(),
            ],
            [
                'name' => 'Pacifico',
                'designer' => 'Vernon Adams',
                'foundry' => 'Google Fonts',
                'price' => 19.99,
                'category_id' => 3,
                'file_path' => 'path/to/pacifico.ttf',
                'preview_image' => 'path/to/preview_pacifico.jpg',
                'created_at' => now(),
            ],
            [
                'name' => 'Roboto',
                'designer' => 'Christian Robertson',
                'foundry' => 'Google Fonts',
                'price' => 29.99,
                'category_id' => 2,
                'file_path' => 'path/to/roboto.ttf',
                'preview_image' => 'path/to/preview_roboto.jpg',
                'created_at' => now(),
            ],
            [
                'name' => 'Lobster',
                'designer' => 'Pablo Impallari',
                'foundry' => 'Impallari Type',
                'price' => 24.99,
                'category_id' => 3,
                'file_path' => 'path/to/lobster.ttf',
                'preview_image' => 'path/to/preview_lobster.jpg',
                'created_at' => now(),
            ],
            [
                'name' => 'Open Sans',
                'designer' => 'Steve Matteson',
                'foundry' => 'Ascender Corp',
                'price' => 29.99,
                'category_id' => 2,
                'file_path' => 'path/to/open_sans.ttf',
                'preview_image' => 'path/to/preview_open_sans.jpg',
                'created_at' => now(),
            ],
            [
                'name' => 'Merriweather',
                'designer' => 'Eben Sorkin',
                'foundry' => 'Sorkin Type',
                'price' => 39.99,
                'category_id' => 1,
                'file_path' => 'path/to/merriweather.ttf',
                'preview_image' => 'path/to/preview_merriweather.jpg',
                'created_at' => now(),
            ],
            [
                'name' => 'Montserrat',
                'designer' => 'Julieta Ulanovsky',
                'foundry' => 'Julieta Ulanovsky',
                'price' => 29.99,
                'category_id' => 2,
                'file_path' => 'path/to/montserrat.ttf',
                'preview_image' => 'path/to/preview_montserrat.jpg',
                'created_at' => now(),
            ],
            [
                'name' => 'Playfair Display',
                'designer' => 'Claus Eggers Sørensen',
                'foundry' => 'Google Fonts',
                'price' => 34.99,
                'category_id' => 1,
                'file_path' => 'path/to/playfair_display.ttf',
                'preview_image' => 'path/to/preview_playfair_display.jpg',
                'created_at' => now(),
            ],
            [
                'name' => 'Raleway',
                'designer' => 'Matt McInerney',
                'foundry' => 'Google Fonts',
                'price' => 19.99,
                'category_id' => 2,
                'file_path' => 'path/to/raleway.ttf',
                'preview_image' => 'path/to/preview_raleway.jpg',
                'created_at' => now(),
            ],
        ]);
    }
}
