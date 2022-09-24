<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudent extends Model
{
    use HasFactory;
    
    protected $fillable = ['id', 'fullName', 'email', 'semester', 'career'];

    public function courses(){
        return $this->belongsToMany(Course::class, 'attend');
    }
}
