<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movement extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'id_movement_type',
        'amount',
        'note',
        'id_user'
    ];

    public function movementTypes(): HasMany {
        return $this->hasMany(MovementType::class);
    }

    public function users() {
        return $this->belongsTo(User::class);
    }
}
