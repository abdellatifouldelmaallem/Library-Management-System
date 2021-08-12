<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class auther extends Model
{
    use HasFactory;

    protected $table = 'auther';

    protected $primaryKey= 'id';

    protected $fillable = [
        'fullName',
    ];

   public function books(){
       return $this->hasMany(book::class);
   }
}
