<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
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
    public function index(){
        return view('admin.adminPages.dashboard');
    }

    /**
     * Show the application users.
     *
     * @return \Illuminate\Contracts\Support\Renderable
    */
    public function userList(){
        return view('admin.users.index');
    }

    /**
     * Show the application users reports.
     *
     * @return \Illuminate\Contracts\Support\Renderable
    */
    public function userReport(){
        return view('admin.users.reports');
    }

    /**
     * Show the application users transactions.
     *
     * @return \Illuminate\Contracts\Support\Renderable
    */
    public function userTransactions(){
        return view('admin.users.transactions');
    }

    public function userProfile(){
        return view('admin.adminPages.profile');
    }

    public function userTax(){
        return view('admin.adminPages.taxType');
    }

    public function adminNotification(){
        return view('admin.adminPages.notification');
    }

    public function changePassword(){
        return view('admin.adminPages.password');
    }

    /**
     * Show the application logout.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminLogout(){
        Auth::logout();      
        return redirect()->route('login')->withErrors(['successMess' => 'Snap! you are done!']);
    }
}
