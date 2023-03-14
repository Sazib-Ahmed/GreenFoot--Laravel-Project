<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Users extends Model
{
    protected $table="users";
    public $timestamp=false;
    const id = 'u_id';
    protected $primaryKey = 'u_id';
}


?>