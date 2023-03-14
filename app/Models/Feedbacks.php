<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedbacks extends Model
{
    use HasFactory;
    protected $table="feedbacks";
    public $timestamp=false;
    const id = 'f_id';
    protected $primaryKey = 'f_id';
}
