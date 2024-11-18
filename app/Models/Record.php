<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $guarded = [];

    public function can_delete()
    {
        return auth()->user()->role == 'admin';
    }
}