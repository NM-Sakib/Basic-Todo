<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    
    public function home(){
        //return 'Ok';
        $posts = Post::all();
        return view('home', ['posts'=>$posts,'title'=>'Laravel practice' ]);
    }

    public function about(){
        return view('about');
    }
}
