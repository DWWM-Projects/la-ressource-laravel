<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index', [
            'posts' => Post::paginate(4),
        ]);
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store()
    {
        //
    }
}
