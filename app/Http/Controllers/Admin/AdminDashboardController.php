<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $metaData = [
            'title' => 'Admin Dashboard',
        ];
        return view('admin.dashboard', $metaData);
    }

    public function profile()
    {
        $metaData = [
            'title' => 'Admin Profile',
        ];
        return view ('admin.profile', $metaData);
    }
}
