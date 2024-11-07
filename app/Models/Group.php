<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $guarded = [];

    public function chefs()
    {
        return $this->hasMany(Chef::class);
    }

    public function can_delete()
    {
        return auth()->user()->role == 'admin';
    }
}
