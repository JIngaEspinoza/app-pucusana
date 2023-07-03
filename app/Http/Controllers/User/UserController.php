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
    public function showRegister()
    {
        Log::debug('mostrar registro');
        $accion = 'Registro';
        return view('usuarios.index_usuarios', compact('accion'));
    }
    public function showLogin()
    {
        return view('auth.login');
    }
    public function registerUser(Request $request)
    {
        Log::debug('Llegamos al controlador del User');
        Log::debug($request);
        try {
            Log::debug('Llegamos al controlador del User');
            Log::debug('Registrando');
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
            $user->password = Hash::make($request->input('password'));
            $user->cargo = $request->input('cargo');
            $user->area = $request->input('area');
            // User::create($user);
            Log::debug('imagen :' . $request->input('imagen'));
            Log::debug('imagen validate:' . $request->hasFile('imagen'));
            if ($request->hasFile('imagen')) {

                // Obtener la imagen del request
                $imagen = $request->file('imagen');
                if ($imagen->getSize() > 100000) {
                    Log::debug('imagen grande');
                    // Validar y almacenar la imagen
                    $path = $request->file('imagen')->store('uploads/users', 'public');

                    // Optimizar la imagen
                    $optimizedPath = $this->optimizeImage($path);
                    $user->imagen = $optimizedPath;
                    Log::debug('user' . $user);
                } else {
                    Log::debug('Imagen chica');
                    Log::debug('user' . $user);
                    $user->imagen = $request->file('imagen')->store('uploads/users', 'public');
                }
            } else {
                Log::debug('no hay imagen');
                $defaultImage = 'uploads/usuarios/perfil_2.svg'; // Ruta relativa de la imagen predeterminada en la carpeta "storage"
                $user->imagen = $defaultImage;
                Log::debug('user' . $user);
            }
            $user->save();
            Log::debug('redirecciona');
            return redirect('/iniciar-sesion')->with('success', 'Cuenta creada existosamente');
        } catch (Exception $th) {
            return response()->json(['message' => $th]);
        }
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        if (!Auth::validate($credentials)) {
            return redirect()->to('\login')->withErrors('auth.failed');
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    public function authenticated(Request $request, $user)
    {
        return redirect('/home');
    }

    private function optimizeImage($path)
    {
        try {
            $image = Image::make(storage_path('app/' . $path));
            Log::debug('Redimensionar la imagen a un tamaño óptimo');
            // Redimensionar la imagen a un tamaño óptimo
            $image->resize(1080, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            Log::debug('Aplicar compresión de calidad');
            // Aplicar compresión de calidad
            $image->encode('jpg', 75);
            Log::debug('Generar un nuevo nombre de archivo único para evitar conflictos');
            // Generar un nuevo nombre de archivo único para evitar conflictos
            $optimizedPath = 'uploads/usuarios/' . uniqid() . '.jpg';
            Log::debug('Guardar la imagen optimizada en el almacenamiento');
            // Guardar la imagen optimizada en el almacenamiento
            Storage::disk('public')->put($optimizedPath, $image->getEncoded());
            Log::debug('Eliminar la imagen original del almacenamiento');
            // Eliminar la imagen original del almacenamiento
            Storage::delete($path);
            Log::debug('Obtener la URL pública del archivo almacenado');
            // Obtener la URL pública del archivo almacenado
            $optimizedUrl = Storage::url($optimizedPath);

            return $optimizedUrl;
        } catch (\Throwable $th) {
            return response()->json(['message' => $th]);
        }
    }

    public function showPassword()
    {
        Log::debug('mostrar Pass');
        $accion = 'Contraseña';
        return view('usuarios.index_usuarios', compact('accion'));
    }

    public function showList()
    {
        Log::debug('mostrar List');
        $accion = 'Lista de usuarios';
        return view('usuarios.index_usuarios', compact('accion'));
    }
}
