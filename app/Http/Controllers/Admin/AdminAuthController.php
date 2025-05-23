<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function login() 
    {
        $metaData = [
            'title' => 'Admin Login',
        ];
        return view('admin.login', $metaData);
    }
}
