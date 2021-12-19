<?php

namespace App\Http\Livewire\Admin\Users;


// For Make Viladion
use Illuminate\Support\Facades\Validator;

use Livewire\Component;

class ListUser extends Component
{
    public $ArrayForUserInputFieldValue =[];


    // Open add user modal
    public function openAddUserModal()
    {
       $this->dispatchBrowserEvent('AddUserModalOpen');
    }


    
    public function createUser()
    {
      //  Input field vaidation
      $validatedData = Validator::make($this->ArrayForUserInputFieldValue,[
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed'
      ])->validate();

    }


    public function render()
    {
        return view('livewire.admin.users.list-user');
    }
}
