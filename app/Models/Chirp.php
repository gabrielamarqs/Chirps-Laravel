<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;

    // to protect against mass assignment
    protected $fillable = [
        'message',
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
