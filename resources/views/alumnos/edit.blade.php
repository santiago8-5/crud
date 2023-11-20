@extends('layouts.app')

@section('titulo', 'Alumno Edit') {{-- El segundo parametro que se le pasa, es el titulo que va tener por defecto --}}

@section('content')

<div>
    <style>
        body {
            background: #085078;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #85D8CE, #085078);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #85D8CE, #085078);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
    </style>
</div>


<section class="bg-gray-900 dark:bg-gray-900">
    <div class="flex justify-center min-h-screen">
        <div class="hidden bg-cover lg:block lg:w-2/5" style="background-image: url('https://img.freepik.com/vector-gratis/ilustracion-concepto-aprendizaje_114360-3454.jpg?w=740&t=st=1700459730~exp=1700460330~hmac=c5b61302158fb3dff4771c400c2ee3151f711d201c0d9ee73c0304ee7910a082')">
        </div>

        <div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
            <div class="w-full">
                <h1 class="text-2xl font-semibold tracking-wider text-white capitalize dark:text-white">
                    Editar alumno
                </h1>



                <form action="{{ route('alumnos.update', $alumno) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
    
                    {{-- CAMPO NOMBRE --}}
    
                    <div class="mb-2">
                        <label for="" class="mb-2 block uppercase text-white font-bold">
                            Nombre
    
                        </label>
    
                        <input type="text" name="name" value="{{ old('name', $alumno->name) }}"
                            class="border p-3 w-full text-gray-500 font-bold rounded-lg
                        @error('name')
                            border-red-500
                        @enderror">
    
    
                        @error('name')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
                    </div>
                    {{-- FIN CAMPO NOMBRE --}}
    
    
    
                    {{-- CAMPOS EDAD Y FECHANACIMIENTO --}}
    
                    <div class="mb-2 grid grid-cols-2 gap-2">
    
                        <div>
                            <label for="" class="mb-2 block uppercase text-white  font-bold">Edad
    
                            </label>
                            <input type="number" name="edad" value="{{ old('edad', $alumno->edad) }}"
                                class="border p-3 w-full text-gray-500 font-bold rounded-lg
                            @error('edad')
                                border-red-500
                            @enderror">
    
    
    
                            @error('edad')
                                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                            @enderror
                        </div>
    
                        <div>
                            <label for="" class="mb-2 block uppercase text-white  font-bold">
                                Año de nacimiento
                            </label>
    
                            <input type="text" name="fechaNacimiento"
                                value="{{ old('fechaNacimiento', $alumno->fechaNacimiento) }}" placeholder="dd-mm-yyyy"
                                class="border p-3 w-full text-gray-500 font-bold rounded-lg
                            @error('fechaNacimiento')
                                border-red-500
                            @enderror">
    
                            @error('fechaNacimiento')
                                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                            @enderror
    
    
                        </div>
    
                    </div>
    
                    {{-- FIN CAMPOS EDAD Y FECHANACIMIENTO --}}
    
    
    
    
    
    
                    {{-- CAMPOS MATERIAS Y PROMEDIO --}}
                    <div class="mb-2 grid grid-cols-2 gap-2">
                        <div>
                            <label for="" class="mb-2 block uppercase text-white font-bold">
                                Materia:
                            </label>
    
                            <input type="text" name="materia" value="{{ old('materia', $alumno->materia) }}"
                                class="border p-3 w-full text-gray-500 font-bold rounded-lg
                                @error('materia')
                                    border-red-500
                                @enderror">
    
    
                            @error('materia')
                                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                            @enderror
    
                        </div>
    
    
                        <div>
    
                            <label for="" class="mb-2 block uppercase text-white  font-bold">
                                Promedio:
    
                            </label>
                            <input type="number" name="promedio" value="{{ old('promedio', $alumno->promedio) }}"
                                class="border p-3 w-full text-gray-500 font-bold rounded-lg
                                @error('promedio')
                                    border-red-500
                                @enderror">
    
    
                            @error('promedio')
                                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                            @enderror
    
    
                        </div>
    
    
    
                    </div>
                    {{-- FIN CAMPOS MATERIAS Y PROMEDIO --}}
    
    
    
    
    
    
                    {{-- CAMPOS GENEROS --}}
                    <div class="mb-4">
                        <label for="" class="mb-2 block uppercase text-white font-bold">Genero</label>
    
                        <div class="flex gap-8">
    
                            <div>
                                <input class="cursor-pointer" type="radio" id="check-masc" name="genero" value="Masculino"
                                    checked>
                                <label class="text-white " for="check-masc">Masculino</label>
                            </div>
    
                            <div>
                                <input class="cursor-pointer" type="radio" id="check-fem" name="genero" value="Femenino">
                                <label class="text-white " for="check-fem">Femenino</label>
                            </div>
    
                            <div>
                                <input class="cursor-pointer" type="radio" id="check-other" name="genero" value="Otro">
                                <label class="text-white " for="check-other">Otro</label>
                            </div>
    
                        </div>
    
    
                    </div>
                    {{-- FIN CAMPOS GENEROS --}}
    
    
    
    
    
    
                    {{-- CAMPOS OPCIONES LENGUAJE FAVORITO --}}
    
                    <div class="mb-2">
    
    
    
                        <label for="" class="mb-2 block uppercase text-white  font-bold">Lenguaje favorito</label>
    
                        <div class="flex gap-8">
    
                            @foreach (['Javascript', 'Python', 'Java', 'PHP'] as $lenguaje)
                                <div>
                                    <label class="text-white " for="{{ strtolower($lenguaje) }}">{{ $lenguaje }}</label>
                                    <input type="checkbox" class="border-2 rounded-3xl border-blue-500 bg-blue-500"
                                        name="lenguaje[]" value="{{ $lenguaje }}"
                                        {{ in_array($lenguaje, explode(', ', $alumno->lenguaje)) ? 'checked' : '' }}>
                                </div>
                            @endforeach
    
                        </div>
    
                    </div>
    
                    {{-- FIN CAMPOS OPCIONES LENGUAJE FAVORITO --}}
    
    
    
    
    
    
    
    
                    {{-- CAMPOS SELECT ESTADO --}}
                    <div class="mb-2">
    
                        <label for="" class="mb-2 block uppercase text-white  font-bold">Estado</label>
                        <select id="estadosSelect" class="border-2 border-sky-500 rounded-lg p-2" name="estado">
                            <option value="" disabled>Seleccione un estado</option>
                            <option value="Guerrero" {{$alumno->estado === "Guerrero" ? "selected": ""}}>Guerrero</option>
                            <option value="Oaxaca" {{$alumno->estado === "Oaxaca" ? "selected": ""}}>Oaxaca</option>
                            <option value="Chiapas" {{$alumno->estado === "Chiapas" ? "selected": ""}}>Chiapas</option>
                            <option value="Michoacán" {{$alumno->estado === "Michoacán" ? "selected": ""}}>Michoacán</option>
                            <option value="Jalisco" {{$alumno->estado === "Jalisco" ? "selected": ""}}>Jalisco</option>
                        </select>
                    </div>
                    {{-- FIN CAMPOS SELECT ESTADO --}}
    
    
    
    
    
    
    
                    {{-- CAMPO DESCRIPCION --}}
                    <div class="mb-2">
                        <label for="" class="mb-2 block uppercase text-white  font-bold">Descripcion</label>
                        <textarea name="descripcion"
                            class="border-2 rounded-lg p-3 w-full 
                            @error('descripcion')
                            border-red-500
                            @enderror"
                            id="">{{ $alumno->descripcion }}</textarea>
                        @error('descripcion')
                            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                        @enderror
    
                    </div>
                    {{-- FIN CAMPO DESCRIPCION --}}
    
    
    
    
    
                    {{-- CAMPO IMAGEN --}}
    
                    <div class="mb-2">
                        <label for="imagen" class="mb-2 uppercase text-white font-bold block">Imagen de Alumno</label>
                        <input type="file" name="imagen" accept=".jpg, .png, .jpeg">
                    
    
                    </div>
    
    
    
                    {{-- FIN CAMPO IMAGEN --}}
    
    
    
    
    
                    <div class="mb-2">
                        <div class="md:flex md:justify-between">
                            <input type="submit" value="Modificar"
                                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold  p-2 text-white rounded-lg">
                            <a href="{{ route('alumnos.show', $alumno) }}"
                                class="bg-green-600 hover:bg-green-700 transition-colors cursor-pointer uppercase font-bold  p-2 text-white rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-black-500 inline font-bold">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                                 </svg>
                                Regresar</a>
                        </div>
                    </div>
    
                </form>
            </div>
        </div>
    </div>
</section>



@endsection
