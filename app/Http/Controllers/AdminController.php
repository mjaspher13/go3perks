<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Index ()
    {
        return view('admin/dashboard');
    }

    public function Clients ()
    {
        return view('admin/dashboard');
    }

    public function AuthorizedClients ()
    {
        return view('admin/authorizedClients');
    }

    public function PersonalAccessTokens ()
    {
        return view('admin/accessTokens');
    }
}
