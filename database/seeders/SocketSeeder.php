<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Socket;

class SocketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $intelBrand = Brand::where('slug', 'intel')->first();
        $amdBrand = Brand::where('slug', 'amd')->first();

        $data = [
            // Data for Intel brand
            [
                'socket_name' => 'LGA 1700',
                'description' => 'Socket for Intel Alder Lake and Raptor Lake processors.',
                'brand_id' => $intelBrand->id ?? null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'socket_name' => 'LGA 1200',
                'description' => 'Socket for Intel Comet Lake and Rocket Lake processors.',
                'brand_id' => $intelBrand->id ?? null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'socket_name' => 'LGA 1151',
                'description' => 'Socket for Intel Skylake and Kaby Lake processors.',
                'brand_id' => $intelBrand->id ?? null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'socket_name' => 'LGA 2066',
                'description' => 'Socket for Intel high-end desktop processors.',
                'brand_id' => $intelBrand->id ?? null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'socket_name' => 'LGA 1366',
                'description' => 'Socket for Intel Nehalem and Westmere processors.',
                'brand_id' => $intelBrand->id ?? null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Data for AMD brand
            [
                'socket_name' => 'AM4',
                'description' => 'Socket for AMD Ryzen processors.',
                'brand_id' => $amdBrand->id ?? null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'socket_name' => 'AM5',
                'description' => 'Socket for AMD Ryzen 7000 series processors.',
                'brand_id' => $amdBrand->id ?? null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'socket_name' => 'TR4',
                'description' => 'Socket for AMD Ryzen Threadripper processors.',
                'brand_id' => $amdBrand->id ?? null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'socket_name' => 'sTRX4',
                'description' => 'Socket for AMD Ryzen Threadripper 3000 series processors.',
                'brand_id' => $amdBrand->id ?? null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'socket_name' => 'AM3+',
                'description' => 'Socket for AMD FX processors.',
                'brand_id' => $amdBrand->id ?? null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Socket::insert($data);
    }
}
