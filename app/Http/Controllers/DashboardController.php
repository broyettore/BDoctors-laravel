<?php

namespace App\Http\Controllers;

use App\Models\Specialisation;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();

        if ($user->is_admin) {
            $users = User::all();
            return view('admin.dashboard', compact('users'));
        } else {
            return view('admin.user.show', compact('user'));
        }
    }
}
