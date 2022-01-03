<?php

namespace App\Http\Livewire\Admin\Appoinments;

use  App\Http\Livewire\Admin\AdminComponent;
use App\Models\Appoinment;


class ListAppoinments extends AdminComponent
{
    
    protected $listeners = ['appoinmentDeleteConfirmed'=>'appoinmentDelete'];
    public $showEditModal = false;
    public $appoinmentIdRemoval = null;

	public $selectedRows = [];
	public $selectPageRows = false;


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


    /* This is Livewire default updated hook */
    // this function make like this = updated + selectPageRows;
    // If any change in this selectPageRows public property this livewire updated hooks call automatically
    // This hooks also recive default $value perimeter
	public function updatedSelectPageRows($value)
	{
		if ($value) {
            // when we want to get appoinments id from database , we get id by int type.
            // But if we want to get id from frontend, we get id by string type.
            // Thats whay we convert getting id as a string.
			$this->selectedRows = $this->appointments->pluck('id')->map(function ($id) {
				return (string) $id;
			});
		} else {
			$this->reset(['selectedRows', 'selectPageRows']);
		}
	}

    /* This is Livewire default get Attribute hook */
    // This function get data when it is call from some where
    // this function make like this = get + ClassName + Property;
	public function getAppointmentsProperty()
	{
        return Appoinment::with('client') 
        ->when($this->status, function($query,$status){
            return $query->where('status', $status);
        })
        ->latest()
        ->paginate(2);
	}



    public function render()
    {
        $appoinments = $appoinments = $this->appointments;
        // Here $this->appointments indicate getAppointmentsProperty() livewire hook.

            
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
