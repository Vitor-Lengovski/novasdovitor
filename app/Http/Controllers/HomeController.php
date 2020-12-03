<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->take(5)->get();
        return view('home', [
            'posts' => $posts
        ]);
    }
    public function login()
    {
        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
