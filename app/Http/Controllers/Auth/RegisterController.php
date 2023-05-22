<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\ADHERENT;
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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'prenom' => ['required', 'string', 'max:255'],
            'mail' => ['required', 'string', 'email', 'max:255'],
            'tel' =>['required','string','max:10'],
            'genre'=>['required','string','max:255'],
            'adresse'=>['required','string','max:255'],
            'age'=>['required','string','max:3'],
            'idTarif'=>['required','int','max:1'],              
            'idCategorie'=>['required','int','max:1'],
            'adhesionRenouvelee'=>['required','string','max:255'],
            'pswd' => ['required', 'string', 'min:8', 'confirmed'],
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
        return ADHERENT::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'mail' => $data['mail'],
            'tel' => $data['tel'],
            'genre' => $data['genre'],
            'adresse' => $data['adresse'],
            'age' => $data['age'],
            'idTarif' => $data['idTarif'],
            'idCategorie' => $data['idCategorie'],
            'adhesionRenouvelee' => $data['adhesionRenouvelee'],
            'pswd' => Hash::make($data['pswd']),
        ]);

        
    }
}
