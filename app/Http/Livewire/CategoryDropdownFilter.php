<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class CategoryDropdownFilter extends Component
{

    public $currentCategory =null; 

    public $message = "msg";

    
    public function setCategory(  $ID)

    {
 

        $this->currentCategory = $ID;
    }

    public function render()
    {
        return view('livewire.category-dropdown-filter');
    }
}
