<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
  use HasFactory;

  protected $fillable = ['description', 'image'];

  public  function getImageUrlAttribute()
  {

    if ($this->image &&   Storage::disk('local')->exists($this->image)) {
      return asset(Storage::url($this->image));
    } else return false;
  }


  public function lots()
  {
    return $this->hasMany(Lote::class, 'category_id');
  }
}
