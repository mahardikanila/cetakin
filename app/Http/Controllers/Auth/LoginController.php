<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect($this->redirectTo);
    }

    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }
        return User::create([
            'name'     => $user->name,
            'email'    => $user->email,
            'provider' => $provider,
            'provider_id' => $user->id
        ]);
    }




//    facebook



//    public function redirectToProvider()
//    {
//        return Socialite::driver('facebook')->redirect();
//    }
//
//
//    public function handleProviderCallback()
//    {
//        $userSocial = Socialite::driver('facebook')->user();
//
////        return $userSocial->email;
//
//        $findUser = User::where('email', $userSocial->email)->first();
//        if ($findUser) {
//            Auth::login($findUser);
//            return redirect('home');
//        } else {
//            $user = new User();
//            $user->name = $userSocial->name;
//            $user->email = $userSocial->email;
//            $user->password = bcrypt($userSocial->email);
//            $user->save();
//            Auth::login($user);
//            return redirect('home');
//        }
//
//
//    }
}
