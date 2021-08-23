<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $data = Post::all();
        return response()->json($data);
    }
    public function store()
    {
        Post::creare([
            'user_id' => Auth::user()->id,
            'body' => $this->body,
        ]);
        return response()->json('success');
    }
}
