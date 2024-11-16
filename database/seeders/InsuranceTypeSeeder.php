<?php

namespace Database\Seeders;

use App\Models\InsuranceType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InsuranceTypeSeeder extends Seeder
{
    public function run(): void
    {
        $insurance_types = [
            [
                'name' => 'Bitakatouna',
                'image' => 'assets/images/no_img.png',
                'description' => 'Card that gives discounts in various places...',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        foreach ($insurance_types as $insurance_type) {
            InsuranceType::create($insurance_type);
        }
    }
}
