<?php

namespace Ecommerce\Http\Controllers\Admin;

use Ecommerce\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
}
