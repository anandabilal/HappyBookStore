<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $fillable = [
        'category_id',
        'title'
    ];

    // Book model belongs to a Category
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    // Establish one-to-one relations between Book->Detail
    public function details()
    {
        return $this->hasOne(Detail::class);
    }
}
