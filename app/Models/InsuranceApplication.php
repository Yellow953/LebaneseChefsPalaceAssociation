<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InsuranceApplication extends Model
{
    protected $guarded = [];

    public function insuranceType()
    {
        return $this->belongsTo(InsuranceType::class);
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
        if (request('name')) {
            $name = request('name');
            $q->where('name', $name);
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
        if (request('dob')) {
            $dob = request('dob');
            $q->where('dob', $dob);
        }
        if (request('maritial_status')) {
            $maritial_status = request('maritial_status');
            $q->where('maritial_status', 'LIKE', "%{$maritial_status}%");
        }
        if (request('health_status')) {
            $health_status = request('health_status');
            $q->where('health_status', 'LIKE', "%{$health_status}%");
        }
        if (request('company_name')) {
            $company_name = request('company_name');
            $q->where('company_name', 'LIKE', "%{$company_name}%");
        }
        if (request('work_location')) {
            $work_location = request('work_location');
            $q->where('work_location', 'LIKE', "%{$work_location}%");
        }
        if (request('work_description')) {
            $work_description = request('work_description');
            $q->where('work_description', 'LIKE', "%{$work_description}%");
        }

        return $q;
    }
}
