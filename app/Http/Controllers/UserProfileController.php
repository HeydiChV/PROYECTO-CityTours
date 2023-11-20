<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserProfileController extends Controller
{
    public function show()
    {
        // Lógica para mostrar el perfil del usuario
        return view('perfil.show');
    }

    public function edit()
    {
        // Lógica para mostrar el formulario de edición del perfil
        return view('perfil.edit');
    }

    public function update(Request $request)
    {
        // Validar los datos del formulario de edición del perfil
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'telefono' => 'nullable|string|max:20',
            // Otros campos según sea necesario
        ]);

        // Lógica para actualizar el perfil del usuario en la base de datos
        // Ejemplo:
        // auth()->user()->update([
        //     'nombre' => $request->input('nombre'),
        //     'correo' => $request->input('correo'),
        //     'telefono' => $request->input('telefono'),
        //     // Otros campos según sea necesario
        // ]);

        // Redirigir con un mensaje de éxito
        return redirect()->route('perfil.show')->with('success', 'Perfil actualizado con éxito');
    }

    // Otras acciones según sea necesario, como cambiar la contraseña, eliminar cuenta, etc.
    public function listarUsuario(){
        $mensaje = session('mensaje');
        if($mensaje){
          //alert()->success('Operación exitosa!!!', $mensaje)->toToast();
        }
         $usuarios = User::all();
         //alert()->success('Exitoso')->toToast();
         return view('lista-usuarios', compact('usuarios'));  
      }
       public function mostrarUsuario(Request $request, $id_usuario){
         return view('mostrar-usuario', compact('id_usuario'));
      }
      public function eliminarUsuario(Request $request, $id_persona){
    
        $usuario = User::find($id_usuario);
        $usuario->delete();
    
        return redirect()
        ->route('lista-usuarios')
        ->with('mensaje', 'Usuario eliminada correctamente');
    }
    public function editarUsuario(Request $request, $id_usuario){
    
      $usuario = User::findOrFail($id_usuario);
      return view('editar-usuario', compact('usuario'));
      //dd($id_usuario);
    }
    public function actualizarUsuario(Request $request, $id_usuario){
      if($request->file('foto')){
        $uriFoto =  $request->file('foto')->store('uploads', 'public');
      }else{
        $uriFoto =  $request->get('fotoEditar');
      }
        $usuario = User::where('usuarioID',$id_usuario)->update(
        [
          'nombre' => $request->get('nombre'),
                    'correo' => $request->get('correo'),
                    'contrasena' => $request->get('contrasena'),
                    'es_admin' => $request->get('es_admin'),
                   
        ]
      );
      return redirect()
      ->route('lista-usuarios')
      ->with('mensaje','Usuario actualizada correctamente');
      //dd($id_usuario);
    }
    public function registroUsuario(){
        return view('registro-usuarios');
    }
    }