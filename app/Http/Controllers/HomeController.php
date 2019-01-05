<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
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

//        Role::create(['name' => 'Admin']);
//        Role::create(['name' => 'Owner']);
//        Role::create(['name' => 'Counter']);

        //Auth()->user()->assignRole('Counter');
        return view('home');
    }
}
