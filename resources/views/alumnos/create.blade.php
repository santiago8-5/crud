

@extends('layouts.app')

@section('titulo', 'Alumnos create') {{-- El segundo parametro que se le pasa, es el titulo que va tener por defecto --}}



@section('content')

<div>
    <style>
        body {
            background: #085078;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #85D8CE, #085078);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #85D8CE, #085078);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Saf*/
        }
    </style>
</div>


<section class="bg-gray-900 dark:bg-gray-900 h-screen">
    <div class="flex justify-center min-h-screen">
        <div class="hidden bg-cover lg:block lg:w-2/5" style="background-image: url('https://images.unsplash.com/photo-1494621930069-4fd4b2e24a11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80')">
        </div>

        <div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
            <div class="w-full">
                <h1 class="text-2xl font-semibold tracking-wider text-white capitalize dark:text-white">
                    Agregar alumno
                </h1>



                <form class="mt-8" action="{{route('alumnos.store')}}" method="post">
                    @csrf
                   
        
                     {{-- CAMPO NOMBRE --}}
        
                     <div class="mb-2">
                        <label for="" class="mb-2 block uppercase text-white  font-bold">
                            Nombre
                            
                        </label>
        
                            <input type="text" name="name" value="{{old('name')}}" class="border p-3 w-full text-gray-500 font-bold rounded-lg
                            @error('name')
                                border-red-500
                            @enderror">
                    
                        
                            @error('name')
                                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                            @enderror
                    </div>
                    {{-- FIN CAMPO NOMBRE --}}
        
        
        
                    {{-- CAMPOS EDAD Y FECHANACIMIENTO --}}
        
                    <div class="mb-2 grid grid-cols-2 gap-2">
        
                        <div>
                            <label for="" class="mb-2 block uppercase text-white  font-bold">Edad
                    
                            </label>
                                <input type="number" name="edad" value="{{old('edad')}}" class="border p-3 w-full text-gray-500 font-bold rounded-lg
                                @error('edad')
                                    border-red-500
                                @enderror">
                                
                        
                          
                                @error('edad')
                                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                                @enderror
                        </div>
        
                        <div>
                            <label for="" class="mb-2 block uppercase text-white font-bold">
                                Año de nacimiento
                            </label>
                
                                <input type="text" name="fechaNacimiento" placeholder="dd-mm-yyyy"  class="border p-3 w-full text-gray-500 font-bold rounded-lg
                                @error('fechaNacimiento')
                                    border-red-500
                                @enderror">
        
                                @error('fechaNacimiento')
                                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
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
        
                                    <input type="text" name="materia" value="{{old('materia')}}" class="border p-3 w-full text-gray-500 font-bold rounded-lg
                                    @error('materia')
                                        border-red-500
                                    @enderror">
                            
                                
                                    @error('materia')
                                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                                    @enderror
        
                            </div>
                            
        
                            <div>
        
                                <label for="" class="mb-2 block uppercase text-white font-bold">
                                    Promedio:
                                    
                                </label>
                                    <input type="number" name="promedio" value="{{old('promedio')}}" class="border p-3 w-full text-gray-500 font-bold rounded-lg
                                    @error('promedio')
                                        border-red-500
                                    @enderror">
                            
                                
                                    @error('promedio')
                                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                                    @enderror
                           
        
                            </div>
                                
        
        
                    </div>
                    {{-- FIN CAMPOS MATERIAS Y PROMEDIO --}}
        
        
        
        
        
        
                    {{-- CAMPOS GENEROS --}}
                    <div class="mb-4">
                        <label for="" class="mb-2 block uppercase text-white  font-bold">Genero</label>
                        
                        <div class="flex gap-8">
        
                            <div>
                                <input class="cursor-pointer" type="radio" id="check-masc" name="genero" value="Masculino" checked>
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
        
                        
        
                        <label for="" class="mb-2 block uppercase text-white font-bold">Lenguaje favorito</label>
        
                        <div class="flex gap-8">
        
                            <div>
                                <label class="text-white " for="js">Javascript</label>
                                <input type="checkbox" class="border-2 rounded-3xl border-blue-500 bg-blue-500" name="lenguaje[]" id="js" value="Javascript" {{-- {{ in_array('Javascript', $alumno->opciones) ? 'checked' : '' }}--}}> 
                            </div>
            
                            
                            <div>
                                <label class="text-white " for="py">Python</label>
                                <input type="checkbox" class="border-2 rounded-3xl border-blue-500 bg-blue-500" name="lenguaje[]" id="py" value="Python" {{-- {{ in_array('Python', $alumno->opciones) ? 'checked' : '' }} --}}>
                            </div>
            
                            
                            <div>
                                <label class="text-white " for="jv">Java</label>
                                <input type="checkbox" class="border-2 rounded-3xl border-blue-500 bg-blue-500" name="lenguaje[]" id="jv" value="Java" {{-- {{ in_array('Java', $alumno->opciones) ? 'checked' : '' }} --}}>
                            </div>
            
                            
                            <div>
                                <label class="text-white " for="ph">PHP</label>
                                <input type="checkbox" class="border-2 rounded-3xl border-blue-500 bg-blue-500" name="lenguaje[]" id="ph" value="PHP" {{-- {{ in_array('PHP', $alumno->opciones) ? 'checked' : '' }} --}}>
                            </div>
        
                        </div>
          
                    </div>
        
                    {{-- FIN CAMPOS OPCIONES LENGUAJE FAVORITO --}}
        
        
        
        
        
        
        
        
                     {{-- CAMPOS SELECT ESTADO --}}
                    <div class="mb-2">
                        
                        <label for="" class="mb-2 block uppercase text-white font-bold">Estado</label>
                        <select id="estadosSelect" class="border-2 border-sky-500 rounded-lg p-2" name="estado">
                            <option value="" disabled selected>Seleccione un estado</option>
                            <option value="Guerrero">Guerrero</option>
                            <option value="Oaxaca">Oaxaca</option>
                            <option value="Chiapas">Chiapas</option>
                            <option value="Michoacán">Michoacán</option>
                            <option value="Jalisco">Jalisco</option>
                        </select>
                    </div>
                    {{-- FIN CAMPOS SELECT ESTADO --}}
        
        
        
                    
                    <div class="mb-2">
                        <label for="" class="mb-2 block uppercase text-white  font-bold">Descripcion</label>
                        <textarea name="descripcion" class="border-2 rounded-lg p-3 w-full 
                        @error('descripcion')
                        border-red-500
                        @enderror" id="">
                    
                        </textarea>
        
                        
                        @error('descripcion')
                                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                        @enderror
        
                    </div>
        
        
        
                   <div class="mb-2">
                         
                
                    <div class="md:flex md:justify-between">
                        <input type="submit" value="Registrar" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold  p-2 text-white rounded-lg">
                
        
                        <a href="{{route('alumnos.index')}}" class="bg-green-600 hover:bg-green-700 transition-colors cursor-pointer uppercase font-bold  p-2 text-white rounded-lg">
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


{{-- RADIO, SELECT, CONTROL UN CRUD --}}

