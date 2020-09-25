<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function envelope()
    {
        return $this->hasOne('App\Envelope');
    }
}
