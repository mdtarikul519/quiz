<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //
    public function index()
    {
        return view('forntend.websitehome');
    }

    public function profile(){
        return view('forntend.profile');
    }
}
