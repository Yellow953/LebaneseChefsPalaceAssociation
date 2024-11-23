<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];

    public function enrollments()
    {
        return $this->hasMany(CourseEnrollment::class);
    }

    public function can_delete()
    {
        return auth()->user()->role == 'admin';
    }

    // Filter
    public function scopeFilter($q)
    {
        if (request('title')) {
            $title = request('title');
            $q->where('title', 'LIKE', "%{$title}%");
        }
        if (request('description')) {
            $description = request('description');
            $q->where('description', 'LIKE', "%{$description}%");
        }
        if (request('location')) {
            $location = request('location');
            $q->where('location', 'LIKE', "%{$location}%");
        }
        if (request('duration')) {
            $duration = request('duration');
            $q->where('duration', 'LIKE', "%{$duration}%");
        }
        if (request('status')) {
            $status = request('status');
            $q->where('status', 'LIKE', "%{$status}%");
        }
        if (request('level')) {
            $level = request('level');
            $q->where('level', 'LIKE', "%{$level}%");
        }
        if (request('taught_by')) {
            $taught_by = request('taught_by');
            $q->where('taught_by', 'LIKE', "%{$taught_by}%");
        }
    }
}
