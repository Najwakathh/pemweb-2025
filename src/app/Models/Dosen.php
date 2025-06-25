<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $fillable = [
        'user_id',
        'kd_dosen',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
