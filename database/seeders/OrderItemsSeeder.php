<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order_items')->insert([
            [
                'order_id' => 1,
                'font_id' => 1,
                'quantity' => 1,
                'price' => 49.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 1,
                'font_id' => 2,
                'quantity' => 1,
                'price' => 29.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 2,
                'font_id' => 2,
                'quantity' => 1,
                'price' => 29.99,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
