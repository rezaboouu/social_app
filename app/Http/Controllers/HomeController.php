<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $post =Post::query()->paginate(20);
        return Inertia::render('Home',[
            'posts'=>$post
        ]);
    }
}
