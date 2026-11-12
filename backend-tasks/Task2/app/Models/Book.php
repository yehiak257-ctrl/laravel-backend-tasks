<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'author_id',
        'title',
        'publisheddate',
    ];

    public function author(){
        return $this->belongsTo(Author::class);
    }
}
