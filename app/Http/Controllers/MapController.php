<?php

namespace App\Http\Controllers;

use App\User;
use Mapper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class MapController extends Controller
{

    public function index()
    {
        Mapper::location(Auth::user()->country)->map();
        return view('map');
}
}
