<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Processor',
                'slug' => 'processor',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Motherboard',
                'slug' => 'motherboard',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'RAM',
                'slug' => 'ram',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'VGA Card',
                'slug' => 'vga-card',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        \App\Models\Category::insert($data);
    }
}
