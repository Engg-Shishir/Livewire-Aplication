<?php

namespace App\Http\Livewire\Admin\Appoinments;

use  App\Http\Livewire\Admin\AdminComponent;
use App\Models\Appoinment;


class ListAppoinments extends AdminComponent
{
    
    protected $listeners = ['appoinmentDeleteConfirmed'=>'appoinmentDelete'];
    public $showEditModal = false;
    public $appoinmentIdRemoval = null;


    // This status variable match appoinments tabale column name.thats whay it conatain all of appoinments table status column information
    public $status = null;
    // This livewire query string formate. Which is automatically add in route as aquery 
    protected $queryString = ['status'];



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

    public function filterAppoinmentsByStatus($status = null)
    {
        $this->resetPage();
        $this->status = $status;
    }

    public function render()
    {
        $appoinments = Appoinment::with('Client')
            // Filter data with status
            ->when($this->status, function($query, $status){
               return $query->where('status',$status);
            })
            ->latest()
            ->paginate();

            
        $appoinmentsCount = Appoinment::count();
        $scheduledAppoinmentsCount = Appoinment::where('status','scheduled')->count();
        $closedAppoinmentsCount = Appoinment::where('status','closed')->count();
            
        return view('livewire.admin.appoinments.list-appoinments',[
            'appoinments' => $appoinments,
            'appoinmentsCount'=> $appoinmentsCount,
            'scheduledAppoinmentsCount'=>$scheduledAppoinmentsCount,
            'closedAppoinmentsCount'=> $closedAppoinmentsCount,
        ]);
    }
}
