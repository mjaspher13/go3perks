<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    public function agent()
    {
        return $this->hasOne('App\User', 'account_id', 'agent_id');
    }
}
