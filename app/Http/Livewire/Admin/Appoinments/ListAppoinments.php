<?php

namespace App\Http\Livewire\Admin\Appoinments;

use  App\Http\Livewire\Admin\AdminComponent;
use App\Models\Appoinment;


class ListAppoinments extends AdminComponent
{
    public $showEditModal = false;

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
