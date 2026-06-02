<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
       public function index()
    {
        return view('dashboard.index');
    }
    
    public function h_menu()
    {
        return view('dashboard.h_menu');
    }

    public function iot()
    {
        return view('dashboard.iot');
    }

    public function demographic()
    {
        return view('dashboard.demographic');
    }

    public function project_Board()
    {
        return view('dashboard.project_board');
    }

    public function crypto_Dashboard()
    {
        return view('dashboard.crypto_dashboard');
    }

    public function eCommerce()
    {
        return view('dashboard.eCommerce');
    }
}
