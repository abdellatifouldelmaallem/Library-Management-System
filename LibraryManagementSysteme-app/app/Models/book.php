<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    protected $table = 'book';

    protected $primaryKey= 'id';

    protected $fillable = [
        'name',
        'image',
        'description',
        'price',
        'auther_id',
        'category_id',
    ];

    public function auther(){
        return $this->hasMany(auther::class);
    }

    public function category(){
        return $this->hasMany(category::class);
    }

    public function library(){
        return $this->belongsToMany(library::class);
    }

    public function pub_house(){
        return $this->belongsToMany(publishing_house::class);
    }

    public function reader(){
        return $this->belongsToMany(reader::class);
    }
}