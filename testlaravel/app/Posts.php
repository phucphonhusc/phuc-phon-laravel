<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $guarded = [];
    protected $fillable = ['user_id','post_title','post_desc'];
    protected $primaryKey = 'post_id';
    protected $table = 'posts';
    public function user(){
        return $this->belongsTo(Users::class, 'user_id');
    }
}
