<?php

namespace ecommerce\Http\Controllers\Admin;

use ecommerce\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
}
