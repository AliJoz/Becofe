<?php

namespace App\Livewire\Home\Users;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class ChangePass extends Component
{
    public $user;
    public $token;
    public $code;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'password'    => 'required|min:8|confirmed',
    ];
    public function mount($id)
    {
    $this->user = User::findOrFail($id);
    }
        public function passwordChange()
        {
        $this->validate();
        $this->user->update([
            'password' => Hash::make($this->password),
        ]);
        Auth::loginUsingId($this->user->id);
        return redirect('admin.home');

        }
        public function render()
        {
        return view('livewire.home.users.change-pass')->layout('auth');
      }


}
