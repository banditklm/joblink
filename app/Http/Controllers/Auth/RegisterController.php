<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Candidat;
use App\Models\Recruteur;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::PROFILE;

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
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nom' => ['required', 'string', 'max:255'],
            // 'prenom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'role' => ['required'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // if($data['role']==2){
        //     Candidat::create([
        //         'nom' => $data['nom'],
        //         'prenom' => $data['prenom'],
        //         'role' => $data['role'],
        //         'email' => $data['email'],
        //         'password' => Hash::make($data['password']),
        //     ]);
        // }else {

        // }

        // return User::create([
        //     'nom' => $data['nom'],
        //     'prenom' => $data['prenom'],
        //     'role' => $data['role'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]);
        $user = new User();
        $user->nom =  $data['nom'];
        if($data['role']==2)
        $user->prenom = $data['prenom'];
        $user->role =  $data['role'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->save();
            if($data['role']==2){
                $candidat = new Candidat();
                $candidat->user_id = $user->id;
                $candidat->save();
            }else if($data['role']==3){
                $recruteur = new Recruteur();
                $recruteur->user_id = $user->id;
                $recruteur->save();
            }


        return $user;

    }
}
