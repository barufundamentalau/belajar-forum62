<?php

namespace App\Models\Forum;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
