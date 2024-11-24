<?php

namespace App\Exports;

use App\Models\Certificate;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CertificatesExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Certificate::all()->map(function ($certificate) {
            return [
                'certificate_type' => $certificate->certificate_type->name,
                'chef' => $certificate->chef->name,
                'restaurant' => $certificate->restaurant->name,
                'start_date' => $certificate->start_date,
                'end_date' => $certificate->end_date,
                'status' => $certificate->status,
                'remarks' => $certificate->remarks,
                'created_at' => $certificate->created_at,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'Certificate Type',
            'Chef',
            'Restaurant',
            'Policy Number',
            'Start Date',
            'End Date',
            'Status',
            'Remarks',
            'Created At',
        ];
    }
}
