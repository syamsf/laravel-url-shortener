<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ShortenUrl extends Model
{
    use HasFactory;

    protected $fillable = [
        'shortened_url',
        'destination_url',
        'expiration_time',
        'current_uses',
        'max_uses',
        'is_active',
        'is_custom',
        'is_private',
        'password',
        'created_by',
        'updated_by',
    ];

    public function createdBy(): BelongsTo {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function updatedBy(): BelongsTo {
        return $this->belongsTo(User::class, 'updated_by', 'id');
    }
}
