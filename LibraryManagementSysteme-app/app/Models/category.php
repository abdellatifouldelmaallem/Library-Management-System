<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $table = 'category';

    protected $primaryKey= 'id';

    protected $fillable = [
        'name',
    ];

    public function book_category(){
        return $this->belongsTo(book::class);
    }
}

