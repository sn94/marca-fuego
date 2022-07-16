<?php

namespace App\Http\Livewire;

use App\Models\Lote;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class LotsTable extends Component
{
    public $lots = [];
    public $showForm = false;

    public $currentLot = null;



    protected $listeners = ['showForm' => 'setShowForm'];

    protected $rules = [

        'currentLot.title' => 'required|string',

        'currentLot.description' => 'required|string',

    ];




    public function setShowForm($modo)

    {

        $this->showForm = $modo;
    }


    public function edit(Lote $lote)

    {
        $this->currentLot =  $lote;
        Log::debug($lote);

        $this->showForm = true;
    }


    public function save()

    {

        $this->validate();



        $this->currentLot->save();
        $this->showForm= false;
    }
    public function mount()
    {
        $this->lots = Lote::get();
    }
    public function render()
    {



        return view('livewire.lots-table');
    }
}
