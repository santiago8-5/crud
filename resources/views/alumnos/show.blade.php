@extends('layouts.app')

@section('titulo', 'Producto ' . $alumno->name) {{-- El segundo parametro que se le pasa, es el titulo que va tener por defecto --}}

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

    <div class="md:flex md:justify-center md:gap-10 md:items-center">

        <div class="md:w-7/12 bg-white p-6 rounded-lg shadow-xl">

            <div class="mt-4 text-xl">

                <div class="mb-10">
                    <a href="{{ route('alumnos.index') }}"
                        class="bg-green-600 hover:bg-green-700 transition-colors cursor-pointer uppercase font-bold  p-2 text-white rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-black-500 inline font-bold">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                        </svg>

                        Regresar</a>

                </div>

                <div class="mb-10 text">

                    <div class="flex justify-center">

                        <div class="md:w-4/12 p-5 item-center">
                            <div class="flex justify-between items-end">



                                <img src="{{ $alumno->imagen ? asset('alumnosimg') . '/' . $alumno->imagen : asset('img/usuario.svg') }}"
                                    alt="Imagen DEL ALUMNO" class="rounded-full">
                                <a href="{{ route('alumnos.edit', $alumno) }}" class="">

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 text-black-500 inline font-bold hover:border">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </a>

                            </div>

                        </div>

                    </div>

                    <div>

                    </div>


                    <p class="font-bold mb-10 text-2xl text-center">Información General del Alumno</p>

                    <div class="mb-2 grid grid-cols-2 gap-2">

                        <div>
                            <p class="mb-3"><strong>Nombre: </strong> {{ $alumno->name }}</p>
                        </div>

                        <div>
                            <p class="mb-3"><strong>Edad: </strong> {{ $alumno->edad }}</p>
                        </div>

                    </div>

                    <div class="mb-2 grid grid-cols-2 gap-2">

                        <div>
                            <p class="mb-3"><strong>Materia: </strong> {{ $alumno->materia }}</p>
                        </div>

                        <div>
                            <p class="mb-3"><strong>Promedio: </strong> {{ $alumno->promedio }}</p>
                        </div>

                    </div>

                    <div class="mb-2 grid grid-cols-2 gap-2">

                        <div>
                            <p class="mb-3"><strong>Fecha de nacimiento: </strong> {{ $alumno->fechaNacimiento }}</p>
                        </div>

                        <div>
                            <p class="mb-3"><strong>Genero: </strong> {{ $alumno->genero }}</p>
                        </div>

                    </div>

                    <div class="mb-2 grid grid-cols-2 gap-2">
                        <div>
                            <p class="mb-3"><strong>Lenguajes de programacion: </strong> {{ $alumno->lenguaje }}</p>
                            <p class="mb-3"><strong>Estado: </strong> {{ $alumno->estado }}</p>
                            <p class="mb-3"><strong>Descripcion: </strong> {{ $alumno->descripcion }}</p>
                        </div>
                    </div>


                </div>



                <form action="{{ route('alumnos.destroy', $alumno) }}" method="post"
                    class="bg-red-600 hover:bg-red-700 transition-colors cursor-pointer uppercase font-bold  p-2 text-white rounded-lg text-center">
                    @csrf
                    @method('delete')


                    <button type="submit" class=" uppercase">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-black-500 inline font-bold">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>

                        Eliminar</button>
                </form>



            </div>


        </div>


    </div>


@endsection
