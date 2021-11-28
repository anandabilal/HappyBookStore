<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $table = 'details';
    protected $primaryKey = 'id';
    protected $fillable = [
        'book_id',
        'author',
        'publisher',
        'year',
        'description'
    ];

    // Detail model belongs to a Book
    public function books()
    {
        return $this->belongsTo(Book::class);
    }
}
