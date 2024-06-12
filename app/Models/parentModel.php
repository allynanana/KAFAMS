<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class parentModel extends Model
{
    use HasFactory;


    protected $table = 'parent';


    protected $primaryKey = 'ParentID';




}
