<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CertificateType extends Model
{
    protected $guarded = [];

    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }

    public function can_delete()
    {
        return auth()->user()->role == 'admin';
    }
}
