<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {
        $posts = Post::all();

        return $this->apiResponse($posts ,200,'Ok');
    }

    public function show($id)
    {
        $post = Post::find($id);
        if($post)
        {
            return $this->apiResponse($post ,200,'Ok');
        }
        else
        {
            return $this->apiResponse(null ,404,'Sorry Data Not Found');
        }
    }
}
