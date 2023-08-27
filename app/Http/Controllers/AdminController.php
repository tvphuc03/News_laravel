<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users= Admin::all();
        $data=[
            'users'=>$users
        ];
        return view('myauth.page.home',$data);
    }

}
