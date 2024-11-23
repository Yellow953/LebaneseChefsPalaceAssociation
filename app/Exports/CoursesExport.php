<?php

namespace App\Exports;

use App\Models\Course;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CoursesExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Course::all()->map(function ($course) {
            return [
                'title' => $course->title,
                'taught_by' => $course->taught_by,
                'description' => $course->description,
                'duration' => $course->duration,
                'level' => $course->level,
                'fee' => $course->fee,
                'status' => $course->status,
                'created_at' => $course->created_at,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'Title',
            'Taught By',
            'Description',
            'Duration',
            'Level',
            'Fee',
            'Status',
            'Created At',
        ];
    }
}
