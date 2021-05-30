<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GlobalMod extends Model
{
  // Don't add create and update timestamps in database.
  public $timestamps  = false;

  protected $table = 'global_mod';

    /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'user_id'
  ];

  /**
   * Get the User that is mod to the auction
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function user(): HasMany
  {
      return $this->belongsTo(User::class, 'user_id');
  }
}