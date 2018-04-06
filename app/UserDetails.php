<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $fillable = [
        'user_id', 'full_name', 'gender', 'religion', 'address', 'city', 'province', 'expertise', 'experience'
    ];

    public function users()
    {
        return $this->belongsTo(Users::class);
    }
}
