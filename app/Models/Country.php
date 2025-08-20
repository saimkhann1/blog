<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Country extends Model
{
  use HasFactory;
  protected $fillable = ['name', 'slug'];

  public function users(): HasMany
  {
    return $this->hasMany(User::class);
  }
  protected static function booted()
  {
    static::creating(function ($country) {
      $country->slug = Str::slug($country->name);
    });
  }
  // public function posts()
  // {
  //   return $this->hasMany(Post::class);
  // }

  public function getRouteKeyName()
  {
    return 'slug';
  }
  public function posts()
{
    return $this->hasManyThrough(
        Post::class,
        User::class,
        'country_id',
        'user_id',   
        'id',        
        'id'         
    );
}
}
