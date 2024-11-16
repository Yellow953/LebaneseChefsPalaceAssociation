<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];

    public function can_delete()
    {
        return auth()->user()->role == 'admin';
    }
}
