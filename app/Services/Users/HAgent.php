<?php

namespace App\Services;

use DB;
 
class HAgent
{
    public function Merchants()
    {
        return
            Merchant::where(HUser::getRoleId(), Auth::user()->id)
            ->get();
    }
} 
?>