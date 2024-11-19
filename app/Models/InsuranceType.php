<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InsuranceType extends Model
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
}
