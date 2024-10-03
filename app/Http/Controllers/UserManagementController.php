<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function manage()
    {
        // $users = User::where('name', '!=', 'admin')->get();
        $users = User::all();
        $data = ['users' => $users];
        return view('UserManagement/user-management', $data);
    }
}
