<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kafaadmin extends Model
{
    use HasFactory;

    protected $table = 'kafaadmin';

    protected $primaryKey = 'AdminId';
}
