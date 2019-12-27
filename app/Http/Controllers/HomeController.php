<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activeuser;
use Illuminate\Support\Facades\DB;

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
        return view('index');
    }


     public function showall()
    {
        $actives=Activeuser::all();
        foreach ($actives as $active) {
            $id=$active->userid;
            $users = DB::table('users')->where('id',$id)->get();
            foreach ($users as $user) {
                //echo $user->name;
                $data="<p>$user->name</p>";

                echo $data;
            }
            
        }
   
    }
}
