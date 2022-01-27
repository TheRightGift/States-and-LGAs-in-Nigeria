<?php

namespace Goziechukwu\NSAL\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
    use HasFactory;

    // Disable Laravel's mass assignment protection
    protected $guarded = [];

    protected $fillable = [
        'name', 'state_id', 'id'
    ];

    public function states()
    {
        return $this->belongsTo(State::class, 'state_id', 'id');
    }
}