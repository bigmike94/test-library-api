<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
     //relationship
    public $timestamps = false;
    protected $hidden = ['pivot'];

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
    use HasFactory;
}
