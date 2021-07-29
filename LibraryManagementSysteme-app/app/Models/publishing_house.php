<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publishing_house extends Model
{
    use HasFactory;

         
    protected $table = 'publishing_house';

    protected $primaryKey= 'id';

    protected $fillable = [
        'name',
        'adress',
        'publishing_date',
    ];

    public function book_pub(){
        return $this->belongsToMany(book::class);
    }

}
