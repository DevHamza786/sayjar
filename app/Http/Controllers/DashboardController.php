<?php

namespace App\Http\Controllers;

use App\Models\AdPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends BaseController
{
    public function index()
    {
        $page_slug = 'dashboard';
        $user = Auth::user();
        $post = AdPost::get();
        $latestpost =  AdPost::latest()->take(5)->get();
        return view('panel.dashboard', compact('page_slug' , 'user' , 'post' , 'latestpost'));
    }
}
