<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;

    protected $table = 'article';

    protected $primaryKey= 'id';

    protected $fillable = [
        'title',
        'content',
        'reader_id',
        'image',
        'date',
    ];

    // reader has many articles
   public function user(){
       return $this->belongsTo(User::class,'reader_id');
   }
}
