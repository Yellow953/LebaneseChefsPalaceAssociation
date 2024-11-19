<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function can_delete()
    {
        return auth()->user()->role == 'admin';
    }

    // Filter
    public function scopeFilter($q)
    {
        if (request('name')) {
            $name = request('name');
            $q->where('name', 'LIKE', "%{$name}%");
        }
        if (request('user_id')) {
            $user_id = request('user_id');
            $q->where('user_id', $user_id);
        }
        if (request('location')) {
            $location = request('location');
            $q->where('location', 'LIKE', "%{$location}%");
        }
        if (request('status')) {
            $status = request('status');
            $q->where('status', 'LIKE', "%{$status}%");
        }
        if (request('start_date') || request('end_date')) {
            $start_date = request()->query('start_date') ?? Carbon::today();
            $end_date = request()->query('end_date') ?? Carbon::today()->addYears(100);
            $q->whereBetween('start_date', [$start_date, $end_date]);
        }
        if (request('description')) {
            $description = request('description');
            $q->where('description', 'LIKE', "%{$description}%");
        }

        return $q;
    }
}
