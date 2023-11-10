<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ActiveUsersController extends Controller
{
    public function electrician()
    {
        $user = auth()->user();
        $UserProfiles = User::all();
        return view('super-admin/Dashboard/Active-Users/electrican-all-user', compact('UserProfiles'));
    }

    public function dealer()
    {
        return view('super-admin/Dashboard/Active-Users/dealer-all-user');
    }

    public function partner()
    {
        return view('super-admin/Dashboard/Active-Users/partner-all-user');
    }
}
