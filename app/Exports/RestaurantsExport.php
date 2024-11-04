<?php

namespace App\Exports;

use App\Models\Restaurant;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RestaurantsExport implements FromCollection
{
    public function collection()
    {
        return Restaurant::all()->map(function ($restaurant) {
            return [
                'name' => $restaurant->name,
                'location' => $restaurant->location,
                'type' => $restaurant->type,
                'certification status' => $restaurant->certification_status,
                'description' => $restaurant->description,
                'created_at' => $restaurant->created_at,
            ];
        });
    }

    public function headings(): array
    {
        return [

            'Name',
            'Location',
            'Type',
            'Certification Status',
            'Description',
            'Created At',
        ];
    }
}
