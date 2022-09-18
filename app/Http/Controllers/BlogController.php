<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'author' => 'required|min:2',
            'content' => 'required|min:10|max:150',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = '/storage/'.$request->file('image')->store('image');
        }

        Post::create($validated);

        return redirect()->route('blog')->with('status', 'Votre article a bien été posté. Merci !');
    }

    public function edit(Post $post)
    {
        return view('blog.edit', [
            'post' => $post,
        ]);
    }

    public function update(Post $post, Request $request)
    {
        $validated = $request->validate([
            'author' => 'required|min:2',
            'content' => 'required|min:10|max:150',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {

            // Changer dans le .env File system de local en public

            if ($post->image) {
                Storage::delete(str($post->image)->remove('/storage/'));
            }

            $validated['image'] = '/storage/'.$request->file('image')->store('image');
        }

        $post->update($validated);

        return redirect()->route('blog')->with('status', 'Votre article a bien été modifié. Merci !');
    }

    public function destroy(Post $post)
    {
        Storage::delete(str($post->image)->remove('/storage/'));
        $post->delete();

        return redirect()->route('blog')->with('status', 'L\'article a été supprimé');
    }
}