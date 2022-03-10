<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    public function user(){
        // you don't need to name the key
        return $this->belongsTo(User::class,'owner_id');//return $this->belongsTo(User::class);
    }
}
