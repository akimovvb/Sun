<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Comment;
use Illuminate\Console\Command;
use App\Models\Post;
use App\Models\User;

class GoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'go';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

     $post  = Post::first();


    // $post->tags()->detach(3);
     //$post->tags()->detach(4);
   //  $post->tags()->sync(1);
    // $post->tags()->syncWithoutDetaching(2);
    // $post->tags()->updateExistingPivot(4);

        $post->profiles()->attach([1, 3, 4]);
       // $post->prifiles()->detach(1)

    }

}
