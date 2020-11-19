<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
<<<<<<< HEAD
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
=======
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcom');
    }

    public function Inicio1(){
        return view('Inicio 1');
    }

    public function Inicio2(){
        return view('Inicio2');
    }

}

>>>>>>> 84e22bb6b08e9e5d81ff9cb4462fd2a79a6b0e2a
