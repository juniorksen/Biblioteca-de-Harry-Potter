<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.Start');
        
    }

    public function store(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password); // Cifra la contraseña con Bcrypt
        $user->save();
    
        return redirect()->route('user.index');
    }

    public function iniciar()
    {
        return view('user.iniciar');
        
    }
   

    public function validaccion(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            // La autenticación ha sido exitosa
            return redirect()->route('user.inicio'); // Redirige al usuario a la ruta /dashboard
        }
    
        // La autenticación ha fallado
        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no son válidas.',
        ]);
    }

    public function inicio(){
        return view('user.inicio');
    }

    public function piedra(){
        return view('user.piedra');

    }

    public function camara(){
        return view('user.camara');

    }

    public function prisionero(){
        return view('user.prisionero');
    }

    public function caliz(){
        return view('user.caliz');
    }

    public function fenix (){
        return view('user.fenix');
    }
    public function principe ()
    {
        return view('user.principe');
    }
    public function reliquias ()
    {
        return view('user.reliquias');
    }

}
