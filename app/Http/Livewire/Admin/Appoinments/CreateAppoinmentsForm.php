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
        // dd($this->state);
        $this->state['client_id'] = '1';
        // $this->state['time'] = '00:00:00';
        $this->state['status'] = 'ok';
        $this->state['note'] = 'ok';
		Appoinment::create($this->state);
    }

    
    public function render()
    {
        return view('livewire.admin.appoinments.create-appoinments-form');
        
    }
}
