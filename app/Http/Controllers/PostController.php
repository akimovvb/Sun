<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Services\PostService;
use App\Http\Resources\Post\PostResource;

class PostController extends Controller
{
  public function index()
  {
   $post = Post::all();
   return PostResource::collection($post)->resolve();
  }

  public function show(Post $post){
  
   return PostResource::make($post)->resolve();
    
  }

  public function store()
  {
   $data = [
    'title' => 'its post title page'
   ];
   $post =  PostService::store($data);
   return PostResource::make($post)->resolve();
   
  }

  public function update(Post $post)
  {

   $data = [
    'title' => 'its  title page updated SECOND'
   ];

   return PostService::update($post, $data);
  }

  public function destroy(Post $post){
 
   return PostService::destroy($post);
  }
}