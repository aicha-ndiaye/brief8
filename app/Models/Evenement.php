<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Evenement extends Model
{
    use HasFactory;
    // public function users(): BelongsToMany
    // {
    //     return $this->belongsToMany(User::class);
    // }

    public function association()
    {
        return $this->belongsTo(Association::class);
    }
}
