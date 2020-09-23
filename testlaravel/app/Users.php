<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $guarded = [];
    protected $fillable = ['user_name','user_pass','user_email'];
    protected $primaryKey = 'user_id';
    protected $table = 'users';
}
