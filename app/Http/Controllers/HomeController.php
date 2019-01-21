<?php

namespace App\Http\Controllers;
use Mapper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
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
        return view('home');
    }

    public function search (){
        $q = Input::get ( 'q' );
        if (empty($q)) {
            return view ('map')->withMessage('No Details found. Try to search again !');

        }else
                Mapper::location($q)->map();

                 return view('map');

    }
}
