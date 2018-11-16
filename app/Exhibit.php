<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exhibit extends Model
{
    /**
     * Get this exhibit's user
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
