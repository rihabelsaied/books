<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Location;
use phpDocumentor\Reflection\Types\Boolean;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/interest';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */


    protected function validator(array $data)
    {
        return Validator::make($data, [

            'Username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'regex:/(01)[0|1|2|5][0-9]{8}/'],
//            'location' => ['required', 'string', 'max:255']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $request = request();
        $profileImage = $request->file('avatar');
        if ($profileImage != null)
        {
            $imageName = time() . '.' . $profileImage->getClientOriginalExtension();
            $profileImage->move(public_path('images/user'), $imageName);
        } else {
            $imageName = 'avatar.jpg';
        }

        $users = User::create([
            'Username' => $data['Username'],
            'avatar' => $imageName,

            'email' => $data['email'],
            'phone' => $data['phone'],
            'location' => $data['location_id'],
            'password' => Hash::make($data['password']),

        ]);
        $user_id = array("user_id" => $users->id);
//        $loc =Location::create([$user_id,
//            'location'=>$data['location']
//        ]);

        return $users;
    }

    public function showRegistrationForm()
    {
        $loctions = Location::all();
        return view('auth.register')->with(['locations' => $loctions]);
    }


}
