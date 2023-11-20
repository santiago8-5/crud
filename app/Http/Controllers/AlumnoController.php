<?php

namespace App\Http\Controllers;


use App\Models\Alumno;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAlumno;
use Intervention\Image\Facades\Image;

class AlumnoController extends Controller
{
    

    public function index(){

        $alumnos = Alumno::orderBy('id', 'desc')->paginate(5);
        return view('alumnos.index', compact('alumnos'));
    }

    
    public function indexdos(){

        $alumnos = Alumno::orderBy('id', 'desc')->paginate(5);
        return view('alumnos.index2', compact('alumnos'));
    }
    



    public function create(){
        return view('alumnos.create');
    }


    public function store(StoreAlumno $request){

        // Obtén todas las entradas del formulario, incluyendo el campo 'opciones'.
        $data = $request->all();

        // Convierte el array de 'opciones' en una cadena separada por comas.
        if (isset($data['lenguaje']) && is_array($data['lenguaje'])) {
            $data['lenguaje'] = implode(', ', $data['lenguaje']);
        }

        $data['slug'] = Str::slug($data['name']);

        $alumno = Alumno::create($data);

        return redirect()->route('alumnos.show', $alumno);
    }



    public function show(Alumno $alumno){

        return view('alumnos.show', compact('alumno'));

    }


    public function edit(Alumno $alumno){

     return view('alumnos.edit', compact('alumno'));

    }


    public function update(Request $request, Alumno $alumno){

        $data = $request->all();

        $request->validate([

            'name'=> 'required',
            'edad' => [
                'required',
                'integer',
                 function ($attribute, $value, $fail) {
                     if ($value < 18) {
                        $fail('La edad debe ser mayor a 18');
                     }
                 }
            ],
            'materia'=> 'required',
            'promedio' => [
                'required',
                'integer',
                function ($attribute, $value, $fail) {
                    if ($value < 70 || $value > 100) {
                        $fail('El promedio debe de estar en un rango de 70-100');
                   }
                }
            ]
        ]);

         // Convierte el array de 'opciones' en una cadena separada por comas.
         if (isset($data['lenguaje']) && is_array($data['lenguaje'])) {
            $data['lenguaje'] = implode(', ', $data['lenguaje']);
        }

        if($request->imagen){
            $imagen = $request->file('imagen');
            $nombreImagen = Str::uuid(). "." .$imagen->extension();

            $imagenServidor = Image::make($imagen);
            $imagenServidor->fit(1000, 1000);

            $imagenPath = public_path('alumnosimg'). '/' . $nombreImagen;
            $imagenServidor->save($imagenPath);
        }


        if ($request->imagen) {
            $data['imagen'] = $nombreImagen ?? '';
        } else {
           
            unset($data['imagen']); 
        }

        $alumno->update($data);
        return redirect()->route('alumnos.show', $alumno);


    }


    public function destroy(Alumno $alumno){


       $alumno->delete();

        return redirect()->route('alumnos.index');


    }


}
