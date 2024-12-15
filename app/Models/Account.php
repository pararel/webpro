<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Account extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'all_targets',
        'current_targets',
        'likes',
        'posts',
        'post_liked',
        'picture',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $table = 'accounts';
}
