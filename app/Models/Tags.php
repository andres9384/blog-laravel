<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    
    //relacion muchos a muchos 

    public function Posts(){
        return $this->belongsToMany(Post::class);
    }
}
