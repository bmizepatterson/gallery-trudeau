<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exhibit extends Model
{
    use SoftDeletes;

    /**
     * Get this exhibit's user
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
