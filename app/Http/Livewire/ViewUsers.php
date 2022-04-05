<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class ViewUsers extends Component
{
   public $state = [];
   public $user;
   public $showUserEditModel = false;

    public function createUser()
    {
       $validatedData =  Validator::make($this->state, [
           'name' => 'required',
           'email' => 'required|email|unique:users',
           'password' => 'required|confirmed',
        ])->validate();

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        $this->dispatchBrowserEvent('hide-form', ['message' => 'User Added Successfully!']);

    }

    public function edit(User $user)
    {
        $this->showUserEditModel = true;
        $this->user = $user;
        $this->state = $user->toArray();
        $this->dispatchBrowserEvent('show-userForm');
    }

    public function updateUser()
    {
        $validatedData =  Validator::make($this->state, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$this->user->id,
            'password' => 'required|confirmed',
        ])->validate();

        if(!empty($validatedData['password'])){
            $validatedData['password'] = bcrypt($validatedData['password']);
        }

        $this->user->update($validatedData);
        $this->dispatchBrowserEvent('hide-form', ['message' => 'User Updated Successfully!']);


    }


    public function render()
    {
        $users = User::latest()->paginate();
        return view('livewire.view-users',[
            'users' => $users,
        ])->extends('layouts.app')->section('content');
    }

    public function addNewUser()
    {
        $this->showUserEditModel = false;
        $this->dispatchBrowserEvent('show-userForm');
    }
}
