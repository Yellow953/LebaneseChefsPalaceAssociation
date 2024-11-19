<?php

namespace App\Exports;

use App\Models\Record;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RecordsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Record::all()->map(function ($record) {
            return [
                'title' => $record->title,
                'chef' => $record->chef->name,
                'description' => $record->description,
                'category' => $record->category,
                'achievement_value' => $record->achievement_value,
                'unit' => $record->unit,
                'achieved_on' => $record->achieved_on,
                'location' => $record->location,
                'created_at' => $record->created_at,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'Title',
            'Chef',
            'Description',
            'Category',
            'Achievement Value',
            'Unit',
            'Achieved On',
            'Location',
            'Created At',
        ];
    }
}
