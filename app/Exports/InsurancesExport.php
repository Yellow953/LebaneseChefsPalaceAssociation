<?php

namespace App\Exports;

use App\Models\Insurance;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class InsurancesExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Insurance::all()->map(function ($insurance) {
            return [
                'insurance_type' => $insurance->insurance_type->name,
                'chef' => $insurance->chef->name,
                'restaurant' => $insurance->restaurant->name,
                'policy_number' => $insurance->policy_number,
                'start_date' => $insurance->start_date,
                'end_date' => $insurance->end_date,
                'status' => $insurance->status,
                'remarks' => $insurance->remarks,
                'created_at' => $insurance->created_at,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'Insurance Type',
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
