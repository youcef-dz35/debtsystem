<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Envelope extends Model
{
    //
    public function loans()
    {
        return $this->belongsTo('App\Loan');
    }
}
