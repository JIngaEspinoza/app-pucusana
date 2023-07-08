<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\RegisterRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{

    public function showRegister(){
        try {
            if (Auth::check() && Auth::user()->estado) {
                $accion = 'Registro';
                $users = $this->userList();
                $username = Auth::user()->username;
                $cargo = Auth::user()->cargo;
                $imagen = Auth::user()->imagen;
                return view('usuarios.index_usuarios', compact('accion', 'users','username','cargo','imagen'));
            }else{
                return redirect()->to('iniciar-sesion')->withErrors('auth.failed');
            }
        } catch (\Throwable $th) {
            Log::error('Error [showRegister]'.$th);
            return redirect()->to('iniciar-sesion')->withErrors('auth.failed');
        }

    }
    public function showLogin(){
        return view('auth.login');
    }
    public function registerUser(Request $request){

        try {

            // Log::debug($request->validated());
            $user = new User();
            $user->apellidos = $request->input('apellidos');
            $user->nombres = $request->input('nombres');
            $user->dni = $request->input('dni');
            $user->edad = $request->input('edad');
            $user->cumple = $request->input('cumple');
            $user->sexo = $request->input('sexo');
            $user->celular = $request->input('celular');
            $user->direccion = $request->input('direccion');
            $user->distrito = $request->input('distrito');
            $user->username = $request->input('username');
            $user->email = $request->input('email');
            $user->rol = $request->input('rol');
            $user->password = $request->input('password');
            $user->cargo = $request->input('cargo');
            $user->area = $request->input('area');
            $user->estado = true;
            $user->soporte = false;
            // User::create($user);

            if ($request->hasFile('imagen')) {

                // Obtener la imagen del request
                Log::debug('Imagen chica');
                Log::debug('user' . $user);
                $user->imagen = $request->file('imagen')->store('uploads/users', 'public');
            } else {
                Log::debug('no hay imagen');
                $defaultImage = 'uploads/usuarios/perfil_2.svg'; // Ruta relativa de la imagen predeterminada en la carpeta "storage"
                $user->imagen = $defaultImage;
                Log::debug('user' . $user);
            }
            $user->save();
            Log::debug('redirecciona');
            return response()->json(['title' => 'Muy bien', 'text' => 'Se registro existosamente'], 200);
        } catch (Exception $th) {
            return response()->json(['title' => 'Error', 'text' => 'Sucedio un error'], 500);
        }
    }

    public function login(LoginRequest $request){
        try {
            $credentials = $request->getCredentials();
            if (!Auth::validate($credentials)) {
                return response()->json(['title' => 'Ingreso fallido.', 'text' => 'El Correo/Nombre de usuario y/o contraseña son incorrectas.', 'check' => 'ERROR'], 200);
            }

            $user = Auth::getProvider()->retrieveByCredentials($credentials);

            Auth::login($user);
            Log::debug('Auth :' . Auth::user());
            return $this->authenticated($request, $user);
        } catch (\Throwable $th) {
            Log::error('Error [login]' . $th);
            return redirect()->to('iniciar-sesion')->withErrors('auth.failed');
        }
    }

    public function authenticated(Request $request, $user){
        return response()->json(['title' => 'Ingreso existoso', 'text' => 'Credenciales correctas.','check' => 'OK'], 200);
    }

    public function showPassword(){
        Log::debug('mostrar Pass');
        try {
            if (Auth::check() && Auth::user()->estado) {
                $accion = 'Contraseña';
                $users = $this->userList();
                $username = Auth::user()->username;
                $cargo = Auth::user()->cargo;
                $imagen = Auth::user()->imagen;
                return view('usuarios.index_usuarios', compact('accion', 'users','username','cargo','imagen'));
            }else{
                return redirect()->to('iniciar-sesion')->withErrors('auth.failed');
            }
        } catch (\Throwable $th) {
            Log::error('Error [showPassword]'.$th);
            return redirect()->to('iniciar-sesion')->withErrors('auth.failed');
        }

    }

    public function showList(){

        try {
            if (Auth::check() && Auth::user()->estado) {
                $accion = 'Lista de usuarios';
                $users = $this->userList();
                $username = Auth::user()->username;
                $cargo = Auth::user()->cargo;
                $imagen = Auth::user()->imagen;
                return view('usuarios.index_usuarios', compact('accion', 'users','username','cargo','imagen'));
            }else{
                return redirect()->to('iniciar-sesion')->withErrors('auth.failed');
            }
        } catch (\Throwable $th) {
            Log::debug('Error [showList]'.$th);
            return redirect()->to('iniciar-sesion')->withErrors('auth.failed');
        }

    }

    //Cambiar contraseña

    public function searchUsername($param){
        $user = User::select('username')->where('username', $param)->where('estado', true)->first();
        return $user;
    }

    public function searchEmail($param){
        $user = User::select('username')->where('email', $param)->where('estado', true)->first();
        return $user;
    }

    public function validateUsernameOrEmail($param){
        $user = User::select('username')->where(function ($query) use ($param) {
            $query->where('username', $param)
                ->orWhere('email', $param);
        })->where('estado', true)->where('soporte', false)->first();
        return $user;
    }

    public function updatePassword(Request $request){
        // Validar los campos de entrada
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        // Buscar al usuario por email o nombre de usuario
        $user = User::where(function ($query) use ($request) {
            $query->where('email', $request->username)
                ->orWhere('username', $request->username);
        })
        ->where('soporte', false)
        ->first();

        // Verificar si se encontró al usuario
        if (!$user) {
            return response()->json(['title' => 'Usuario no encontrado', 'text' => 'El usuario consultado no se encuentra en registrado.'], 200);
        }

        // Actualizar la contraseña del usuario
        $user->password = $request->password;
        $user->save();

        // Redireccionar al usuario a la página de inicio de sesión
        return response()->json(['title' => 'Cambio exitoso', 'text' => 'Se actualizó correcta la contraseña.'], 200);
    }
    public function userList(){
        $users = User::select('username', 'imagen', 'celular', 'email', 'cargo')
            ->where('soporte', false)
            ->get();

        return $users;
    }
}
