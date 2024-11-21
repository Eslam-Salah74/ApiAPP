<?php
namespace App\Repository\posts;

interface PostRepositoryInterface{

    public function allpost();
    public function postsResource();
    public function show($id);
    public function postResource($id);

}