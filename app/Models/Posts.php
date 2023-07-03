<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';
    use HasFactory;

    protected $attributes =[
        'likes'=>0
    ];
    protected $fillable = [
        'id',
        'tittle',
        'description',
        'file',
        'coursetype',
        'posttype',
        'likes',
        'user_id',
        'timestamps',
    ];

    public function user()
    {
        return $this->belongsTo(user::class);
    }

}
