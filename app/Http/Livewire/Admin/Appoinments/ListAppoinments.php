<?php

namespace App\Http\Livewire\Admin\Appoinments;

use  App\Http\Livewire\Admin\AdminComponent;
use App\Models\Appoinment;


class ListAppoinments extends AdminComponent
{
    
    protected $listeners = ['appoinmentDeleteConfirmed'=>'appoinmentDelete'];
    public $showEditModal = false;
    public $appoinmentIdRemoval = null;


    public function confirmAppoinmentRemoval($appoinmentId)
    {
      # code...
    //   dd($appoinmentId);
      $this->appoinmentIdRemoval = $appoinmentId;
       $this->dispatchBrowserEvent('showDeleteAppoinmentConfirmation');
    }

    public function appoinmentDelete()
    {
        # code...
        $user = Appoinment::findOrFail($this->appoinmentIdRemoval);
        $user->delete();
        $this->dispatchBrowserEvent('alert',['message'=>'Appoinment Deleted successfully']);
    }

    public function render()
    {
        $appoinments = Appoinment::with('Client')
            ->latest()
            ->paginate();
            
        return view('livewire.admin.appoinments.list-appoinments',[
            'appoinments' => $appoinments,
        ]);
    }
}
