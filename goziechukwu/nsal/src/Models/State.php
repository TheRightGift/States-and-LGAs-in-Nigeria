<?php

namespace Goziechukwu\NSAL\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
  use HasFactory;

  // Disable Laravel's mass assignment protection
  protected $guarded = [];

  protected $fillable = [
    'name', 'id'
  ];

  //relationship with lgas
  public function lga()
  {
      return $this->hasMany('Goziechukwu\NSAL\Models\Lga');
  }
}