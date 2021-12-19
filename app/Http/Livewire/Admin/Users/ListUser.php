<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;

class ListUser extends Component
{
    public $showEditModal = false;



    public function openAddUserModal()
    {
       $this->dispatchBrowserEvent('AddUserModalOpen');
    }
    public function render()
    {
        return view('livewire.admin.users.list-user');
    }
}
