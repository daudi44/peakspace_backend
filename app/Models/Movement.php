<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    use HasFactory;

    protected $fillable = [
        'movement_category_id',
        'type',
        'amount',
    ];

    public function movementCategory()
    {
        return $this->belongsTo(MovementCategory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
