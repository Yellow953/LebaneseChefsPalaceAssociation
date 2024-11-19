<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class CourseEnrollment extends Model
{
    protected $guarded = [];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Filter
    public function scopeFilter($q)
    {
        if (request('id')) {
            $id = request('id');
            $q->where('id', $id);
        }
        if (request('course_id')) {
            $course_id = request('course_id');
            $q->where('course_id', $course_id);
        }
        if (request('chef_id')) {
            $chef_id = request('chef_id');
            $q->where('chef_id', $chef_id);
        }
        if (request('status')) {
            $status = request('status');
            $q->where('status', 'LIKE', "%{$status}%");
        }
        if (request('start_date') || request('end_date')) {
            $start_date = request()->query('start_date') ?? Carbon::today();
            $end_date = request()->query('end_date') ?? Carbon::today()->addYears(100);
            $q->whereBetween('enrolled_at', [$start_date, $end_date]);
        }
    }
}
