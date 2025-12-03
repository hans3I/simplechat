<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Message;
use App\Models\Conversation;

class User extends Authenticatable
{
    protected $fillable = [
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }

    public function conversations()
    {
        return $this->belongsToMany(Conversation::class, 'members')
            ->withPivot('role', 'joined_at');
    }
}
