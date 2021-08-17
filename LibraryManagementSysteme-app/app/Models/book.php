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
        'user_id',
        'category_id',
    ];

    public function auther(){
        return $this->belongsTo(auther::class);
    }

    public function category(){
        return $this->belongsTo(category::class);
    }

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function pub_house(){
        return $this->belongsToMany(publishing_house::class);
    }

    public function reader(){
        return $this->belongsToMany(reader::class);
    }
}
