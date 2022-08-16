<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $type=Auth::user()->type;

        if($type=='1')
        {
            return redirect('/dashboard');
        }
        elseif($type=='2')
        {
            return redirect('/');
        }
        else
        {
            return redirect('/');
        }

    }
}
