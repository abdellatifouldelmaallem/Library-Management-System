<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class admin extends Model
{
    use HasFactory,HasApiTokens;

    protected $table = 'admin';

    protected $primaryKey= 'id';

    protected $fillable = [
        'fullName',
        'email',
        'password',
    ];

    
}
