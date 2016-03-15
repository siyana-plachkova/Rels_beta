<?php

namespace App\Http\Controllers\Auth;

use Auth;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Interest;
use App\Image;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers;

    protected $redirectTo = '/profile';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function index()
    {
        return view('registration', ['errors' => []]);
    }

    public function register(Request $request)
    {
        $validator = $this->validator($request->all());

        if($validator->fails())
        {
            $request->flashExcept('password');
            $messages = $validator->messages()->toArray();
            return view('registration', ['errors' => $messages]);
        }

        $user = $this->create($request->all());

        Auth::login($user);

        return redirect($this->redirectTo);
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->input('email'),
                           'password' => $request->input('password')])) {
            return redirect($this->redirectTo);
        }
    }

    public function logout()
    {
        if (Auth::check())
        {
            Auth::logout();
        }

        return redirect('/');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'name' => 'required|max:50',
            'surname' => 'required|max:50'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        $profile = Profile::create([
            'user_id' => $user->id,
            'name' => $data['name'],
            'surname' => $data['surname'],
            'gender' => $data['gender'],
            'birth_date' => $data['birth_year'] . '-' . $data['birth_month'] . '-' . $data['birth_day'],
            'location' => $data['location'],
            'interested_in' => $data['interested_in'],
            'description' => $data['bio']
        ]);

        if (isset($data['interest']))
        {
            foreach ($data['interest'] as $interest) {
                $interest = Interest::firstOrCreate(['name' => $interest]);
                $profile->interests()->attach($interest->id);
            }
        }

        if (isset($data['profile_photo']))
        {
            $image = Image::create([
                'profile_id' => $profile->id,
                'photo_url' => $data['profile_photo']
            ]);
            $profile->profile_photo_id = $image->id;
            $profile->save();
        }

        return $user;
    }
}
