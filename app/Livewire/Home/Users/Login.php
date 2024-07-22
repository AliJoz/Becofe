<?php

namespace App\Livewire\Home\Users;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\Admin\Log;
use App\Models\Home\Token;
use Carbon\Carbon;

class Login extends Component
{
    public User $user;
    public $mobile, $password;

    public function mount()
    {
        $this->user = new User;
    }

    protected $rules = [
        'mobile'    => 'required|ir_mobile',
        'password'    => 'required',
    ];

    public function __construct()
    {
    }
    public function LoginForm()
    {
        $this->validate();
        $user = User::where('mobile', $this->mobile)->first();

        if (isset($user)) {
            if ($user->mobile_verified_at == null) {
                //TODO
                $code = random_int(1000, 9999);
                if (isset($user->token->expired_at)) {
                    if ($user->token->expired_at < Carbon::now()) {
                        Token::create([
                            'user_id' => $user->id,
                            'code' => $code,
                            'type' => 'register',
                            'expired_at' => Carbon::now()->addMinutes(3)
                        ]);
                        //ovvjcd95qay5i8d
                        // User::sendSms($code, $user->mobile);
                    }
                }else
                {
                    Token::create([
                        'user_id' => $user->id,
                        'code' => $code,
                        'type' => 'register',
                        'expired_at' => Carbon::now()->addMinutes(3)
                    ]);
                    //ovvjcd95qay5i8d
                    // User::sendSms($code, $user->mobile);
                }

                // Log::logWritter('sendSms','یک پیامک ارسال شد - '.$user->name);

                return to_route('verify.mobile',[$user->id,$code]);
            }


            if (Hash::check($this->password, $user->password)) {
                Auth::loginUsingId($user->id);
                //TODO
                return to_route('admin.home');
            } else {

                $this->dispatch('alert',type:'error',title:'اطلاعات ورود نادرست است!');

            }
        } else {

            $this->dispatch('alert',type:'error',title:'اطلاعات ورود نادرست است!');

        }
    }
    public function render()
    {
        return view('livewire.home.users.login')->layout('auth');
    }
}
