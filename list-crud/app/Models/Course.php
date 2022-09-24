<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


    public function teachers(){
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    public function estudents(){
        return $this->belongsToMany(Estudent::class, 'attend');
    }
}
