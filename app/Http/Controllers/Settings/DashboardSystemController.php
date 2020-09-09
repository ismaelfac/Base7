<?php

namespace App\Http\Settings\Controllers;

use Illuminate\Http\Request;

class DashboardSystemController extends Controller
{
    //
    public function index()
    {
        return view('admin.content_system');
    }
}
