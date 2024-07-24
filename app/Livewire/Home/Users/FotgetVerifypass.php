<?php

namespace App\Livewire\Home\Users;

use Livewire\Component;
use App\Models\User;
use App\Models\Home\Token;
use Carbon\Carbon;
class FotgetVerifypass extends Component
{
    public $user;
    public $token;
    public $code;

    protected $rules = [
        'code'    => 'required',
    ];

    public function mount($id)
    {
        $this->user = User::findOrFail($id);
        $this->token = Token::where('user_id', $id)->latest()->first();
    }

    public function verifyCode()
    {
        $this->validate();
        if ($this->token->code == $this->code) {
            if ($this->token->expired_at > Carbon::now()) {
                $this->user->update([
                    'mobile_verified_at' => now()
                ]);

                //TODO
                return redirect('change.password',$this->user->id);

                //TODO
                // redirect('admin.home');
            } else {
                //TODO
                //show button
                
            $this->dispatch('alert', type: 'error', title: 'کد تائید منقضی شده است' . "<br/>" . 'بر روی دکمه ارسال مجدد کلیک کنید.');
        }
                
        } else {
            
            $this->dispatch('alert', type: 'error', title: 'کد تایید شما اشتباه است!');
        }
    }

    public function render()
    {
        $user = $this->user;
        return view('livewire.home.users.fotget-verifypass',compact('user'))->layout('auth');
    }
}
