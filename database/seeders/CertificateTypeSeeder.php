<?php

namespace Database\Seeders;

use App\Models\CertificateType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CertificateTypeSeeder extends Seeder
{
    public function run(): void
    {
        $certificate_types = [
            [
                'name' => 'Test Chef',
                'description' => 'TestChef is a certificate for quality control...',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        foreach ($certificate_types as $certificate_type) {
            CertificateType::create($certificate_type);
        }
    }
}
