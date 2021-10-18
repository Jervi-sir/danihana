<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
class HomeController extends Controller
{
    public function index() 
	{
        $data = Home::first();    

		return view('home.index',['data' => $data]);
	}
}
