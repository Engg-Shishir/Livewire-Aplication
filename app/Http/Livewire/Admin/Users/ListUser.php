<?php

namespace App\Http\Livewire\Admin\Users;
use App\Models\User;
use Livewire\WithFileUploads;

// For Make Viladion
use Illuminate\Support\Facades\Validator;

use  App\Http\Livewire\Admin\AdminComponent;

class ListUser extends AdminComponent
{
    use  WithFileUploads;

    public $showEditModal = false;
    public $ArrayForUserInputFieldValue =[];
    public $user;
    public $userId;
    public $photo;
    public $searchUser = null;


    // Open add user modal
    public function openAddUserModal()
    {    
      // Reset form when form modal is open
       $this->reset();

      // Create browser event
       $this->dispatchBrowserEvent('Add_Edit_UserModalOpen');
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

      if ($this->photo) {
         $validatedData['avatar'] = $this->photo->store('/', 'avatars');
      }
      
      User::create($validatedData);
      
      // Modal close when form is submitted
      $this->dispatchBrowserEvent('Add_Edit_UserModalClose',['message'=>'User added successfully']);
       

    }

    public function showDeleteUserModal($id)
    {
      # code...
      $this->userId = $id;
      $this->dispatchBrowserEvent('openConfirmDeleteModel');
    }

    public function confirmUserDelete()
    {
      # code...
      $user = User::findOrFail($this->userId);
      $user->delete();
      // $this->dispatchBrowserEvent('showDeleteUserModal');
      $this->dispatchBrowserEvent('hideDeleteUserModal',['message'=>'User Deleted successfully']);
    }

    public function showEditUserModal( User $user)
    {
      # code...
      // Reset Form
      $this->reset();
      // To show edit modal, make this true
      $this->showEditModal = true;
      // put $user perimeter inside user variable
      $this->user = $user;
      // make user variable as a array and put it inside ArrayForUserInputFieldValue array.Thats whay we see all input field with value.Because this array is asociated with input field.
      $this->ArrayForUserInputFieldValue = $user->toArray();
      //Open Edit_Add user modal
      $this->dispatchBrowserEvent('Add_Edit_UserModalOpen');
      
    }

    public function Edit_And_UpdateUser(){

      $validatedData = Validator::make($this->ArrayForUserInputFieldValue,[
        'name' => 'required',
        'email' => 'required|email|unique:users,email,'.$this->user->id,
        'password' => 'sometimes|confirmed'
      ])->validate();
        
      if(!empty($validatedData['password'])){
        $validatedData['password'] = bcrypt( $validatedData['password']);
      }

        $this->user->update($validatedData);
        $this->dispatchBrowserEvent('Add_Edit_UserModalClose',['message'=>'User Updated successfully']);
    }


    public function render()
    {       
    
      $users = User::query()
      ->where('name','like','%'.$this->searchUser.'%')
      ->where('email','like','%'.$this->searchUser.'%')
      ->latest()->paginate(4);
      // dd($users);

      return view('livewire.admin.users.list-user',[
        'users' => $users,
      ]);
    }
}
