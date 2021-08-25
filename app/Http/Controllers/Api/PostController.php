<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::paginate(10);
        return PostResource::collection($post);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required',
        ]);
        $post =  Post::create([
            'user_id' => Auth::user()->id,
            'body' => $request->body,
        ]);
        return new PostResource($post);
    }
    public function show(Post $post)
    {
        // $post = Post::find($id);
        return new PostResource($post);
    }
    public function update(Request $request, Post $post)
    {
        //Fungsi Update Berasal Dari PostPolicy
        $this->authorize('update', $post);
        $post->Update([
            'body' => $request->body,
        ]);
        return new PostResource($post);
    }
    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);
        $post->delete();
        return response()->json([
            'massage' => 'Post Delete',
        ]);
    }
}
