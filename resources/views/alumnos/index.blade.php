@extends('layouts.app')

@section('titulo', 'Alumnos') {{-- El segundo parametro que se le pasa, es el titulo que va tener por defecto --}}

@section('content')

    <div class="mb-10">
        <h1 class="font-bold text-blue-600 mb-6 text-center uppercase text-3xl ">Listado de alumnos</h1>
    </div>




    <div class="container">

        <div class="mb-10">
          <a class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold  p-2 text-white rounded-lg"
            href="{{ route('alumnos.create') }}">
            Crear alumno
        </a>
        </div>


        <table class="table-fixed w-full border-spacing-x-0 border-gray-70">
            <thead class="bg-sky-400">
                <tr>
                    <th class="border-separate border-spacing-2  border-stone-800 text-white p-5 text-xl uppercase">Nombre
                    </th>
                    <th class="border-separate border-spacing-2  border-stone-800 text-white p-5 text-xl uppercase">Edad</th>
                    <th class="border-separate border-spacing-2  border-stone-800 text-white p-5 text-xl uppercase">Materia
                    </th>
                    <th class="border-separate border-spacing-2  border-stone-800 text-white p-5 text-xl uppercase">Promedio
                    </th>
                    <th class="border-separate border-spacing-2  border-stone-800 text-white p-5 text-xl uppercase">Acciones
                    </th>

                </tr>
            </thead>

            <tbody>

                @foreach ($alumnos as $alumno)
                    <tr class="text-center h-16 hover:bg-slate-300">
                        <td>
                            <div class="flex items-center min-w-0 gap-x-4">
                                <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                                    src="{{ $alumno->imagen ? asset('alumnosimg') . '/' . $alumno->imagen : asset('img/usuario.svg') }}"
                                    alt="">
                                <div class="min-w-0 flex-auto">
                                    <p class="text-sm font-semibold leading-6 text-left text-gray-900">{{ $alumno->name }}
                                    </p>
                                </div>
                            </div>

                        </td>
                        <td>{{ $alumno->edad }}</td>
                        <td>{{ $alumno->materia }}</td>
                        <td>{{ $alumno->promedio }}</td>
                        <td>
                            <a href="{{ route('alumnos.show', $alumno) }}"
                                class="bg-green-600 hover:bg-green-700 p-2 transition-colors cursor-pointer  text-white font-bold rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6 text-black-500 inline font-bold">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9zm3.75 11.625a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                </svg>

                                Detalles</a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>






    {{ $alumnos->links() }}


@endsection
