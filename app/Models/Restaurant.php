<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $guarded = [];

    public function insurances()
    {
        return $this->hasMany(Insurance::class);
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
        if (request('phone')) {
            $phone = request('phone');
            $q->where('phone', 'LIKE', "%{$phone}%");
        }
        if (request('owner')) {
            $owner = request('owner');
            $q->where('owner', 'LIKE', "%{$owner}%");
        }
        if (request('location')) {
            $location = request('location');
            $q->where('location', 'LIKE', "%{$location}%");
        }
        if (request('type')) {
            $type = request('type');
            $q->where('type', 'LIKE', "%{$type}%");
        }
        if (request('certification_status')) {
            $certification_status = request('certification_status');
            $q->where('certification_status', 'LIKE', "%{$certification_status}%");
        }
        if (request('description')) {
            $description = request('description');
            $q->where('description', 'LIKE', "%{$description}%");
        }

        return $q;
    }
}
