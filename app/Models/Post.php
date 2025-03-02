<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{
   use HasFactory;

    public function category(): BelongsTo
    {

       return $this->belongsTo(Category::class);

    }

    public function tags(): BelongsToMany
    {

       return $this->belongsToMany(Tag::class);

    }

    public function profiles(): BelongsToMany
    {

       return $this->belongsToMany(Profile::class, 'post_profile_likes');

    }

    public function comments(): HasMany
    {
      return $this->hasMany(Comment::class);
    }

    
   

   }
