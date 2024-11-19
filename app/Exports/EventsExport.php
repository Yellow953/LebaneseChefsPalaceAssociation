<?php

namespace App\Exports;

use App\Models\Event;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EventsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Event::all()->map(function ($event) {
            return [
                'name' => $event->name,
                'description' => $event->description,
                'start_date' => $event->start_date,
                'end_date' => $event->end_date,
                'location' => $event->location,
                'status' => $event->status,
                'user' => $event->user->name,
                'created_at' => $event->created_at,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'Name',
            'Desciption',
            'Start Date',
            'End Date',
            'Location',
            'Status',
            'User',
            'Created At',
        ];
    }
}
