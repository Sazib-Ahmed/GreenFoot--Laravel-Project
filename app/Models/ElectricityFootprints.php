<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectricityFootprints extends Model
{
    use HasFactory;
    protected $table="electricityfootprints";
    public $timestamp=false;
    const id = 'ef_id';
    protected $primaryKey = 'ef_id';
}
