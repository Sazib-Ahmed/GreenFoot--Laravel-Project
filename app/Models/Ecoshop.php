<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ecoshop extends Model
{
    use HasFactory;
    protected $table="ecoshops";
    public $timestamp=false;
    protected $primaryKey = 'id';
}
