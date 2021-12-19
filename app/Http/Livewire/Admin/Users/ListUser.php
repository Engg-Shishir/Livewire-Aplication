<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;

class ListUser extends Component
{
    public $name;
    public $state =[];


    // Open add user modal
    public function openAddUserModal()
    {
       $this->dispatchBrowserEvent('AddUserModalOpen');
    }


    
    public function createUser()
    {
      dd($this->state);
    }


    public function render()
    {
        return view('livewire.admin.users.list-user');
    }
}
