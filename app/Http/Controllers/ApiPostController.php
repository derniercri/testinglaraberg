<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiPostController extends Controller
{
    public function listPosts()
    {
        return response()->json(Post::all());
    }

    public function showPost(Post $post)
    {
        $content = $post->lb_raw_content;
        return response()->json(
            [
                "id" => $post->id,
                "title" => $post->title,
                "excerpt" => $post->excerpt,
                "user" => $post->user->name,
                "category" => $post->category->title,
                "age" => $post->age->title,
                "created_at" => $post->created_at->isoFormat('dddd Do MMMM YYYY'),
                "updated_at" => $post->updated_at->isoFormat('dddd Do MMMM YYYY'),
                "thumbnail" => $post->thumbnail,
                "published" => $post->published,
                'lb_content' => $content,
            ]
        );

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
//        $this->validate($request, [
//            'title' => 'required|max:100',
//            'excerpt' => 'required|max:100',
//            'lb_raw_content' => 'required',
//            'thumbnail' => 'required',
//            'published' => 'required|boolean',
//            'user_id' => 'required',
//            'category_id' => 'required',
//            'age_id' => 'required',
//        ]);

        $post = Post::create([
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'lb_raw_content' => $request->lb_raw_content,
            'thumbnail' => $request->thumbnail,
            'published' => $request->published,
            'user_id' => $request->user_id,
            'category_id' => $request->category_id,
            'age_id' => $request->age_id,
        ]);

        return response()->json([
            "id" => $post->id,
            "title" => $post->title,
            "excerpt" => $post->excerpt,
            "user" => $post->user->name,
            "category" => $post->category->title,
            "age" => $post->age->title,
            "created_at" => $post->created_at->isoFormat('dddd Do MMMM YYYY'),
            "updated_at" => $post->updated_at->isoFormat('dddd Do MMMM YYYY'),
            'thumbnail' => $post->thumbnail,
            'published' => $post->published,
            'lb_content' => $post->lb_raw_content,
        ], 201);
    }
}
