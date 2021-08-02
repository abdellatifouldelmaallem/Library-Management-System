<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Librarian extends Model
{
    use HasFactory,HasApiTokens;

 

     protected $primaryKey= 'id';

    protected $fillable = [
        'fullName',
        'nameOfLibrary',
        'email',
        'password',
    ];

}
