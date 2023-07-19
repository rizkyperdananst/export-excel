<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Exports\UserExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('user', compact('users'));
    }

    public function export_excel()
    {
        return Excel::download(new UserExport, 'user.xlsx');
    }
}
