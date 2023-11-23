<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function show() {
        if(Auth::check()) {
            return redirect('/home');
        }
        return view('auth.register');
    }

    // public function register(RegisterRequest $request) {
    //     $user = User::create($request->validated());
    //     // Redireccion a login
    //     return redirect('/login')->with('success','Account created succesfully');
    // }

    public function register(RegisterRequest $request)
    {
       
       //return $request; // Iniciar una transacción
        //DB::beginTransaction();
        $user = User::create([
            'dni' => $request->input('dni'),
            'password' => $request->input('password'), 
            'rol_id' => 1
        ]);

            // Obtener el ID del usuario recién creado
            $userId = $user->id;

            // Crear el registro en la tabla "patients"
            $patient = Patient::create([
                'usuario_id' => $userId, // Asignar la clave foránea
                'nombres' => $request->input('nombres'),
                'apellidos' => $request->input('apellidos'),
                'telefono' => $request->input('telefono'),
                'email' => $request->input('email'),
                'direccion' => $request->input('direccion'),
                'fecha_nacimiento' => $request->input('fecha'),
            ]);

            // Confirmar la transacción
            // DB::commit();

            // Redirigir o devolver una respuesta exitosa
            return redirect()->route('home');

// return $user;
//         try {
//             // Crear el usuario en la tabla "users"
//             $user = User::create([
//                 'dni' => $request->input('dni'),
//                 'password' => $request->input('password'), 
                
//             ]);
// return $user;
//             // Obtener el ID del usuario recién creado
//             $userId = $user->id;

//             // Crear el registro en la tabla "patients"
//             $patient = Patient::create([
//                 'user_id' => $userId, // Asignar la clave foránea
//                 'nombres' => $request->input('nombres'),
//                 'apellidos' => $request->input('apellidos'),
//                 'telefono' => $request->input('telefono'),
//                 'email' => $request->input('email'),
//                 'direccion' => $request->input('direccion'),
//                 'fecha_nacimiento' => $request->input('fecha'),
//             ]);

//             // Confirmar la transacción
//             DB::commit();

//             // Redirigir o devolver una respuesta exitosa
//             return redirect()->route('home');

//         } catch (\Exception $e) {
//             // En caso de error, revertir la transacción
//             DB::rollback();

//             // Manejar el error según tus necesidades
//             return redirect()->route('reg')->with('error', 'Ocurrió un error durante el registro.');
//         }

        // $user = new User();
        // $user->dni = $request->input('dni');
        // $user->password = $request->input('password');
        // $user->save();
    }
}
