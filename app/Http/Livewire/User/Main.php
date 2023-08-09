<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class Main extends Component
{
    public $name;
    public $role = '0'; 
    public $email;
    public $password;
    public $password_confirmation;
    public $select_id;

    protected $listeners = ['delUserConfirmed' => 'delUserAcc'];

    public function saveAdmin()
    {
      
        $validatedData = Validator::make(
            [
                'name' => $this->name,
                'role' => $this->role,
                'email' => $this->email,
                'password' => $this->password,
                'password_confirmation' => $this->password_confirmation,
            ],
            [
                'name' => 'required|string|max:255',
                'role' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:8|confirmed',
                'password_confirmation' => 'required|min:8',
            ]
        )->validate();

        User::create([
            'name' => $this->name,
            'role' => $this->role,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        $this->reset();

    }

    public function delUser($id){
        $this->select_id=$id;
        $this->dispatchBrowserEvent('showdelConfirm');
    }

    public function delUserAcc(){
        $user = User::findOrFail($this->select_id);
        $user->delete();
        $this->dispatchBrowserEvent('Userdeleted');
    }


    public function render()
    {
        $user = User::orderBy('id','DESC')->get();
        return view('livewire.user.main',['user'=>$user]);
    }
}
