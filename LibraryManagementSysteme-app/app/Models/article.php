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
        'content',
        'date',
    ];

    // reader has many articles
   public function reader(){
       return $this->hasMany(reader::class);
   }
}
