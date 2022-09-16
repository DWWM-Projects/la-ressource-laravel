<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index', [
            'posts' => Post::paginate(10),
        ]);
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'author' => 'required|min:2',
            'content' => 'required|min:10|max:150',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('cover')) {
            $validated['cover'] = '/storage/'.$request->file('cover')->store('cover');
        }

        Post::create($validated);

        return redirect()->route('blog')->with('status', 'Votre article a bien été posté. Merci !');
    }
}