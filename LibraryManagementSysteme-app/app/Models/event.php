<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;

    
    protected $table = 'event';

    protected $primaryKey= 'id';


    protected $fillable = [
        'type_event',
        'participant',
        'date',
    ];

    public function library_event(){
        return $this->belongsToMany(library::class);
    }
}
