<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class Shishir extends Component
{
    public $users;
    public $admin;
    // protected $listeners = ['refreshComponent' => '$refreshhhhh'];

    public function mount(){
        $this->refresh();
    }

    public function refresh(){
        $this->users = User::all();
        // dd($this->users);
    }

    public function ClickButton(User $user)
    {
         $roles =  Validator::make(['role' => $user->role],[
            'role' => [
              'required',
              Rule::in(User::ROLE_ADMIN, User::ROLE_USER),
            ],
          ])->validate();

          if($roles['role'] == 'admin'){
             $roles['role'] = "user";
          }else{
            $roles['role'] = "admin";
          }

          $user->update(['role' => $roles['role']]);
          $this->refresh();
          $this->dispatchBrowserEvent('successAlert', ['message' => "Role changed to {$roles['role']} successfully."]);
    }

    public function render()
    {
        return view('livewire.shishir');
    }
}
