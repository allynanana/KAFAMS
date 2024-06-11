<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentRecord extends Model
{
    use HasFactory;

    // Specify the fillable attributes
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = [
        'StudentName',
        'StudentGender',
        'StudentAge',
        'EducationLevel',
        'EmergencyContact',
    ];
}
