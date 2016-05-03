<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factor extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('App\Models\Access\User');
    }


    public function account()
    {
        return $this->belongsTo('App\Account');
    }
}
