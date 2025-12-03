<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Member;
use App\Models\User;
use App\Models\Message;

class Conversation extends Model
{
   protected $fillable = [
        'name',
        'type',
        'created_by'
   ];

   public function messages(){
        return $this->hasMany(Message::class);
   }

   public function members(){
        return $this->hasMany(Member::class);
   }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'members')
            ->withPivot('role', 'joined_at');
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
