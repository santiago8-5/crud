<header class="p-5 border-b bg-white shadow">

    <div class="container mx-auto sm:flex justify-between items-center">

        <div class="flex justify-center">

            <h1 class="text-3xl font-black justify-center">
                Universidad
            
            </h1>

        </div>
        

        <nav class="flex gap-5 items-center justify-center">

            <a href="{{route('alumnos.index')}}" class="font-bold uppercase text-gray-600 text-sm hover:text-blue-500 transition ease-in-out delay-180 {{request()->routeIs('alumnos.index') ? 'active' : ''}}" >Alumnos</a>

            {{-- <a href="{{route('nosotros')}}" class="font-bold uppercase text-gray-600 text-sm hover:text-blue-500 {{request()->routeIs('nosotros') ? 'active' : ''}}" >Nosotros</a>

            <a href="{{route('contactanos.index')}}" class="font-bold uppercase text-gray-600 hover:text-blue-500 text-sm {{request()->routeIs('contactanos.index') ? 'active' : ''}}">Contáctanos</a> --}}
        </nav>


    </div>

</header>











