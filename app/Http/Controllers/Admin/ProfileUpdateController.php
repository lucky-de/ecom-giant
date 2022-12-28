<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileUpdateController extends Controller
{
     public function index()
    {
        $data['page_title'] = 'Profile';

        return view('admin.templates.profile.profile',compact('data'));
    }

}
