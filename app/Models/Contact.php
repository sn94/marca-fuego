<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;


    protected $guarded = [ '_token'];



    public  function subscriptor()
    {

        return $this->hasOne( Subscriptor::class );
        
    }
}
