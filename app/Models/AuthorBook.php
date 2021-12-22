<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorBook extends Model
{
    public $timestamps = false;
    protected $table = "author_book";
    use HasFactory;
}
