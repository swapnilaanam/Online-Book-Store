<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['book_id', 'book_name', 'writer_name', 'published_year',
                           'price', 'book_image', 'book_description'];
}
