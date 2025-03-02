<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;
    public function category(): BelongsTo
    {
        return $this->post->category();
    }
    

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }


    public function user(){
        return $this->belongsTo(User::class);
    }
}
