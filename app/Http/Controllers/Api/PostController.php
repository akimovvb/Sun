<?php

    namespace App\Http\Controllers\Api;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\Post\StorePostRequest;
    use App\Http\Requests\Post\UpdatePostRequest;
    use App\Http\Resources\Post\PostResource;
    use App\Models\Post;
    use Illuminate\Http\Request;

    class PostController extends Controller
    {
        /**
         * Display a listing of the resource.
         */
        public function index()
        {
           // return PostResource::collection(Post::all());
           $post = Post::all();
           dd($post);
        }

        /**
         * Store a newly created resource in storage.
         */
        public function store(StorePostRequest $request)
        {
            $data = $request->validated(); 
          $post = Post::create($data);
          return PostResource::make($post)->resolve();
        }

        /**
         * Display the specified resource.
         */
        public function show(Post $post)
        {
            return PostResource::make($post)->resolve();
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(UpdatePostRequest $request, Post $post)
        {
            $data = $request->validated();  
          $post->update($data);
          return PostResource::make($post)->resolve();
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(Post $post)
        {
            $post->delete();
            return response()->json([
                'message' => 'удаление успешно'
            ]);
        
        }
    }
