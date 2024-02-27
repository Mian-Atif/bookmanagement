<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books'; // Specify the table name if it differs from the model name

    protected $fillable = [
        'title',
        'author',
        'genre',
        'published_year',
    ];
}
