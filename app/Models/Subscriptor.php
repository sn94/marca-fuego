<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriptor extends Model
{
    use HasFactory;
    protected $guarded = [ '_token'];

    public  function contact()
    {

        return $this->belongsTo( Contact::class );
        
    }
}
