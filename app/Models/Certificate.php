<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $guarded = [];

    public function chef()
    {
        return $this->belongsTo(Chef::class);
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function certificateType()
    {
        return $this->belongsTo(CertificateType::class);
    }

    public function can_delete()
    {
        return auth()->user()->role == 'admin';
    }

    // Filter
    public function scopeFilter($q)
    {
        if (request('id')) {
            $id = request('id');
            $q->where('id', $id);
        }
        if (request('insurance_type_id')) {
            $insurance_type_id = request('insurance_type_id');
            $q->where('insurance_type_id', $insurance_type_id);
        }
        if (request('chef_id')) {
            $chef_id = request('chef_id');
            $q->where('chef_id', $chef_id);
        }
        if (request('restaurant_id')) {
            $restaurant_id = request('restaurant_id');
            $q->where('restaurant_id', $restaurant_id);
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
        if (request('remarks')) {
            $remarks = request('remarks');
            $q->where('remarks', 'LIKE', "%{$remarks}%");
        }

        return $q;
    }
}
