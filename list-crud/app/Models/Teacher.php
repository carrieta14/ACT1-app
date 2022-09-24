<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['id','fullName', 'email', 'phone', 'departament'];

    public function courses(){
        return $this->hasMany(Course::class, 'id');
    }
}
