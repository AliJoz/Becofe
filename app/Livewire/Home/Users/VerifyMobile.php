<?php

namespace App\Livewire\Home\Users;

use Livewire\Component;
use App\Models\User;
use App\Models\Home\Token;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class VerifyMobile extends Component
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
        if($this->token->code == $this->code)
        {
            if ($this->token->expired_at > Carbon::now())
            {
                $this->user->update([
                    'mobile_verified_at' => now()
                ]);
                Auth::loginUsingId($this->user->id);
                dd("ad");
                return redirect('admin.home');
            } else {
                //TODO
                //show button repeat send sms
                $this->dispatch('alert', type: 'error', title: 'کد تائید منقضی شده است' . "<br/>" . 'بر روی دکمه ارسال مجدد کلیک کنید.');
                
            }
        } else {
           
            $this->dispatch('alert', type: 'error', title: 'کد تائیدیه اشتباه است!');
          
        }
    }

    public function render()
    {

        return view('livewire.home.users.verify-mobile', [
            'user' => $this->user,

        ])->layout('auth');
    }
}
