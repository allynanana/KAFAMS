<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class muipadmin extends Model
{
    use HasFactory;

    protected $table = 'muipadmin';

    protected $primaryKey = 'MUIPID';
}
