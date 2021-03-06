<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany("App\User")->withPivot('expire_date');
    }
}
