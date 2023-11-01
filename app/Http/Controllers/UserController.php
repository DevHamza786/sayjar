<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    public function index(){

        $data['page_slug'] = request()->route()->uri();
        $data['users'] = User::role('customer')->get();
        return view('panel.users.index' , $data);
    }
}
