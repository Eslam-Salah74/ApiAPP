<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Repository\posts\PostRepositoryInterface;


class PostController extends Controller
{
    protected $Post;

    public function __construct(PostRepositoryInterface $Post) {
        $this->Post = $Post;
    }

     // Return All Posts 
     public function index()
     {
        return $this->Post->allpost();
     }
 
     // Return All Posts Using Resource
     public function postsResource()
     {
         
     }
     
     // Return One Post
     public function show($id)
     {
        
     }
 
     // Return One Post Using Resource
     public function postResource($id)
     {
         
     }
 
 
     // Store Data
     public function store(Request $request)
     {
         
     }
}
