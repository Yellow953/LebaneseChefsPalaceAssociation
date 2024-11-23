<?php

namespace App\Exports;

use App\Models\CourseEnrollment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EnrollmentsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return CourseEnrollment::all()->map(function ($course_enrollment) {
            return [
                'id' => $course_enrollment->id,
                'course' => $course_enrollment->course->title,
                'chef' => $course_enrollment->chef->name,
                'status' => $course_enrollment->status,
                'enrolled_at' => $course_enrollment->enrolled_at,
                'completed_at' => $course_enrollment->completed_at,
                'created_at' => $course_enrollment->created_at,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'Id',
            'Course',
            'Chef',
            'Status',
            'Enrolled At',
            'Completed At',
            'Created At',
        ];
    }
}
