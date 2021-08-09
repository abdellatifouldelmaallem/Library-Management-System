<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class library extends Model
{
    use HasFactory;

      
    protected $table = 'library';

    protected $primaryKey= 'id';

    protected $fillable = [
       
        'admin_id',
        'NameOfLibrary',
        'adress',
        'email',
        'password',
    ];

    public function city_library(){
        return $this->belongsToMany(city::class,'location')->withTimestamps();
    } 

    public function event_library(){
        return $this->belongsToMany(event::class);
    }

    public function book_library(){
        return $this->belongsToMany(book::class);
    }

}
