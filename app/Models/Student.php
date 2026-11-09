<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Student extends Model
{
    protected $table = 'students';
    protected $fillable = ['nis', 'name', 'gender', 'major_id', 'class_id', 'user_id'];

    use HasFactory;


    public function user()
    {
        return $this->belongTo(User::class, 'user_id', 'id');
    }

    public function major()
    {
        return $this->belongsTo(Major::class, 'major_id', 'id');
    }

    public function schoolClass()
    {
        return $this->belongsTo(SchoolClass::class, 'class_id', 'id');
    }

    public function subject()
    {
        return $this->belongsToMany(
             Subject::class,
        'student_subject',
        'student_id',
        'subject_id'
        
        );
       
    
    }
    
}

