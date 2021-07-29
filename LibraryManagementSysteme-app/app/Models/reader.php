<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reader extends Model
{
    use HasFactory;

    protected $table = 'reader';

    protected $primaryKey= 'id';

    protected $fillable = [
        'fullName',
        'email',
        'password',
    ];

    // article brlonge to a reader
    public function article(){
        return $this->belongsTo(article::class);
    }

    public function book_reader(){
        return $this->belongsToMany(book::class);
    }

}