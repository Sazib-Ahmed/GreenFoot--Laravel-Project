<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{

   use HasFactory;
    protected $table="trees";
    public $timestamp=false;
    protected $primaryKey = 'id';
}
