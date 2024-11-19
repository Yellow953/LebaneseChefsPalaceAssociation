<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $guarded = [];

    public function chef()
    {
        return $this->belongsTo(Chef::class);
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
        if (request('category')) {
            $category = request('category');
            $q->where('category', 'LIKE', "%{$category}%");
        }
        if (request('location')) {
            $location = request('location');
            $q->where('location', 'LIKE', "%{$location}%");
        }
        if (request('chef_id')) {
            $chef_id = request('chef_id');
            $q->where('chef_id', $chef_id);
        }
        if (request('start_date') || request('end_date')) {
            $start_date = request()->query('start_date') ?? Carbon::today();
            $end_date = request()->query('end_date') ?? Carbon::today()->addYears(100);
            $q->whereBetween('achieved_on', [$start_date, $end_date]);
        }

        return $q;
    }
}
