<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('App\Models\Access\User');
    }

    public function get_first_name()
    {
        return $this->first_name;
    }
}
