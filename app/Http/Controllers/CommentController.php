<?php

namespace App\Http\Controllers;

use App\Http\Resources\Comment\CommentResource;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Services\CommentService;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Comment::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'post' => 'its post for comment',
            'content' => 'its content for comment'
        ];

        $comment = CommentService::store($data);
        return CommentResource::make($comment)->resolve();
         
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
      return CommentResource::make($comment)->resolve();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Comment $comment)
    {
        $data =[
            'content' => 'its content in id 2'
        ];
       $comment = CommentService::update($comment, $data);

       return new CommentResource($comment);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
    $comment = CommentService::destroy($comment);
    return new CommentResource($comment);
    }
}
