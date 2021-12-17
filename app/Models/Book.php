<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    
    public $timestamps = false;
      
    protected $fillable = ['name', 'year', 'reserved'];

    protected $hidden = ['pivot'];//exclude pivot table

    public function authors() //relationship with authors
    {
        return $this->belongsToMany(Author::class);
    }
    use HasFactory;
}
