<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    public function run(): void
    {
        $groups = [
            [
                'name' => 'Important',
                'color' => '#00ff00',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Not Important',
                'color' => '#ff0000',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        foreach ($groups as $group) {
            Group::create($group);
        }
    }
}
