<?php

namespace App\Http\Controllers;

use App\Models\Age;
use App\Models\Category;
use App\Models\Post;
use App\Models\Test;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        return view('posts.index', ['posts' => Post::orderBy('created_at', 'desc')
            ->where('published', 1)
            ->paginate(12)]);
    }

    /**
     * Display a listing of users resource.
     */

    public function myposts(): View
    {

        return view('posts.myposts', ['posts' => Auth::user()->posts()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('posts.create', [
                'posts' => Post::all(),
                'categories' => Category::all(),
                'ages' => Age::all()
            ]
        );

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {

        Post::create(
            [
                'body' => $request->body,
                'title' => $request->title,
                'excerpt' => $request->excerpt,
                'category_id' => $request->category,
                'age_id' => $request->age,
                'user_id' => Auth::id(),
            ]
        );
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post, 'categories' => Category::all(), 'ages' => Age::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, Post $post)
    {
        dd($request->all());
        $post->update(
            [
                'body' => $request->body,
                'title' => $request->title,
                'excerpt' => $request->excerpt,
                'category_id' => $request->category,
                'age_id' => $request->age,
                'user_id' => Auth::id(),
            ]
        );
        return redirect()->route('posts.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
