<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\Conversation;

class Member extends Model
{
    protected $table = 'members';

    public $timestamps = false; // karena kita pakai joined_at saja

    protected $fillable = [
        'user_id',
        'conversation_id',
        'role',
        'joined_at',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function conversation(): BelongsTo
    {
        return $this->belongsTo(Conversation::class);
    }
}
