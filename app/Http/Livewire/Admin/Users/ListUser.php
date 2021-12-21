<?php

namespace App\Http\Livewire\Admin\Users;
use App\Models\User;


// For Make Viladion
use Illuminate\Support\Facades\Validator;

use Livewire\Component;

class ListUser extends Component
{
    public $ArrayForUserInputFieldValue =[];
    
    public $user;


    // Open add user modal
    public function openAddUserModal()
    {    
      // Reset form when form modal is open
       $this->reset();

      // Create browser event
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

      $validatedData['password'] = password_hash($validatedData['password'], PASSWORD_DEFAULT);
      
      User::create($validatedData);
      
      // Modal close when form is submitted
      $this->dispatchBrowserEvent('AddUserModalClose',['message'=>'User added successfully']);
       

    }


    public function render()
    {       
    
      $users = User::latest()->paginate(2);
      // dd($users);

      return view('livewire.admin.users.list-user',[
        'users' => $users,
      ]);
    }
}
