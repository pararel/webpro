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

    public function incrementPosts()
    {
        $this->increment('posts');
    }
    public function decrementPosts()
    {
        $this->decrement('posts');
    }
    public function incrementCurrentTargets()
    {
        $this->increment('current_targets');
    }
    public function decrementCurrentTargets()
    {
        $this->decrement('current_targets');
    }
    public function incrementAllTargets()
    {
        $this->increment('all_targets');
    }
}
