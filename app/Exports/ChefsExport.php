<?php

namespace App\Exports;

use App\Models\Chef;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ChefsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Chef::all()->map(function ($chef) {
            return [
                'name' => $chef->name,
                'phone' => $chef->phone,
                'dob' => $chef->dob,
                'address' => $chef->address,
                'rank' => $chef->rank,
                'feedback' => $chef->feedback,
                'group' => $chef->group->name,
                'created_at' => $chef->created_at,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'Name',
            'Phone',
            'Date Of Birth',
            'Address',
            'Rank',
            'Feedback',
            'Group',
            'Created At',
        ];
    }
}
