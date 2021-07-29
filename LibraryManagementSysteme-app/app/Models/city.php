<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    use HasFactory;

    protected $table = 'city';

    protected $primaryKey= 'id';

    protected $fillable = [
        'name',
        'code_post',
    ];

public function library_city(){
    return $this->belongsToMany(library::class,'location')->withTimestamps();
}

}
