<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Lote extends Model
{
    use HasFactory;

    protected $guarded = ['_token'];

    public  function getFrontPhotoUrlAttribute()
    {
  
      if ($this->front_photo &&   Storage::disk('local')->exists($this->front_photo)) {
        return asset(Storage::url($this->front_photo));
      } else return false;
    }
    public  function getVideoUrlAttribute()
    {
  
      if ($this->video &&   Storage::disk('local')->exists($this->video)) {
        return asset(Storage::url($this->video));
      } else return false;
    }

    public function category(){
      return $this->belongsTo(Category::class);
    }
}
