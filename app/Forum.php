<?php

namespace forum;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $table = 'forums';

    protected $fillable = [
        'name', 'description',
        ];
    
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
