<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostApiController extends Controller
{
  
    public function index()
    {
        return Post::limit(10)->get();
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Post $post)
    {
        return $post;
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}
