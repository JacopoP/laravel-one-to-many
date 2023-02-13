<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Person;
use App\Models\PersonDetail;
use App\Models\Post;

class MainController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function postsFirst(){
        $people = Person::all();
        $pd = PersonDetail::all();
        $posts = Post::all();
        return view('pages.post_first', compact('people', 'pd', 'posts'));
    }

    public function peopleFirst(){
        $people = Person::all();
        $pd = PersonDetail::all();
        $posts = Post::all();
        return view('pages.people_first', compact('people', 'pd', 'posts'));
    }
}
