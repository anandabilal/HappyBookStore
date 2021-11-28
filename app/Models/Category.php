<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'category'
    ];

    // Establish one-to-many relations between Category->Book
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
