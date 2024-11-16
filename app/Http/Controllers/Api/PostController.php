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
}
