<?php

namespace App\Http\Controllers;

use Auth;
use Tracker;

use Illuminate\Http\Request;

use App\Merchant;

use Facades\App\Services\HUser;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home = HUser::getRole();

        if($home == 'agent')
        {
            $merchants = Merchant::where(HUser::getRoleId(), Auth::user()->id)->get();
            return view($home . '/dashboard')->with('merchants', $merchants);
        }

        else if($home == 'merchant')
        {
            $merchants = Merchant::where(HUser::getRoleId(), Auth::user()->id)->get();
            return view($home . '/dashboard');
        }
        
    }
}
