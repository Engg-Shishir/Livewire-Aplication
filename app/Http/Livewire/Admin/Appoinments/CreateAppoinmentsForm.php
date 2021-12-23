<?php

namespace App\Http\Livewire\Admin\Appoinments;


use Livewire\Component;
use App\Models\Appoinment;
use App\Models\Client;

class CreateAppoinmentsForm extends Component
{

    public $state = [];

    public function createAppointment()
	{

		Appoinment::create($this->state);
    }

    
    public function render()
    {

        return view('livewire.admin.appoinments.create-appoinments-form');
        
    }
}
