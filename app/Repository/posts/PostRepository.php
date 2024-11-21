<?php
namespace App\Repository\posts;

use App\Models\Post;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Api\ApiResponseTrait;



class PostRepository implements PostRepositoryInterface{
 
    use ApiResponseTrait;

    // Return All Posts 
    public function allpost()
    {
        $posts = Post::all();

        return $this->apiResponse($posts ,200,'Ok');
    }

    // Return All Posts Using Resource
    public function postsResource()
    {
        $posts = PostResource::collection(Post::get());
        return $this->apiResponse($posts ,200,'Ok');
    }
    
    // Return One Post
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

    // Return One Post Using Resource
    public function postResource($id)
    {
        $post = $post = Post::find($id);
        if($post)
        {
            return $this->apiResponse(new PostResource($post) ,200,'Ok');
        }
        else
        {
            return $this->apiResponse(null ,404,'Sorry Data Not Found');
        }
    }


    // Store Data
    public function store(Request $request)
    {
        $post = Post::create($request->all());
        if($post)
        {
            return $this->apiResponse($post ,201,'Post Stored');
        }
        else
        {
            return $this->apiResponse(null ,400,'Sorry Data Not Stored');
        }
    }
}
