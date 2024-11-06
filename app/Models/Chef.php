<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    protected $guarded = [];

    public function group()
    {
        return $this->belongsTo(Group::class);
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
        if (request('address')) {
            $address = request('address');
            $q->where('address', 'LIKE', "%{$address}%");
        }
        if (request('rank')) {
            $rank = request('rank');
            $q->where('rank', 'LIKE', "%{$rank}%");
        }
        if (request('feedback')) {
            $feedback = request('feedback');
            $q->where('feedback', 'LIKE', "%{$feedback}%");
        }
        if (request('group_id')) {
            $group_id = request('group_id');
            $q->where('group_id', $group_id);
        }

        return $q;
    }
}
