<?php

namespace App\Http\Livewire\Admin\Appoinments;


use Livewire\Component;
use App\Models\Appoinment;
use App\Models\Client;
use Illuminate\Support\Facades\Validator;

class CreateAppoinmentsForm extends Component
{

    public $state = ['status' => 'SCHEDULED'];

    public function createAppointment()
	{
        // dd($this->state);
        // $this->state['client_id'] = '1';
        Validator::make($this->state,[
            'client_id' => 'required',
            'color'=>'required',
            'date' => 'required',
            'time' => 'required',
            // That means note can be empty
            'note' => 'nullable',
            // This status only recive SCHEDULED,CLOSED
            'status' => 'required|in:SCHEDULED,CLOSED',],
        // Custom Message
        ['date.required' => 'Alert ! Shishir warning you for last time.'])->validate();
    
        $result = Appoinment::create($this->state);
      
        $this->dispatchBrowserEvent('alertSuccess', ['message' => 'Appointment created successfully!']);
    }

    
    public function render()
    {
        $clients = Client::all();
        return view('livewire.admin.appoinments.create-appoinments-form', [
        	'clients' => $clients,
        ]);
        
    }
}
