@php
    $autk = App\Models\Autk::first();
@endphp

<footer id="footer" class="bg-black py-4">
    <div class="p-14 text-white text-center md:text-start md:flex justify-between">

        <section class="mb-6">
            <h3 class="mb-4">CONTACTO</h3>
            <ul>
                <li class="mb-2">{{ $autk->celular ? 'Cell: '.$autk->celular : '' }}</li>
                <li class="mb-2">{{ $autk->telefono ? 'Tel: '.$autk->telefono : '' }}</li>
                <li class="mb-2">{{ $autk->email ? 'Email: '.$autk->email : '' }}</li>
                <li class="mb-2">{{ $autk->direccion ? 'Direccion: '.$autk->direccion : '' }}</li>
            </ul>
        </section>

        <section class="mb-6">
            <h3 class="mb-2">ATUK</h3>
            <a href="{{ route('login') }}">Iniciar Sesion</a>
            <a href="{{ route('register') }}">Registrarse</a>
        </section>

        <section class="mb-6">
            <h3 class="mb-4">REDES SOCIALES</h3>
            <ul>
                @if ($autk->whatsapp)
                    <li class="flex justify-center md:justify-normal gap-1 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path>
                            <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1"></path>
                        </svg>
                        +{{ $autk->whatsapp }}
                    </li>
                @endif
                @if ($autk->instagram)
                    <li class="flex justify-center md:justify-normal gap-1 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
                            <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                            <path d="M16.5 7.5l0 .01"></path>
                        </svg>
                        {{ $autk->instagram }}
                    </li>
                @endif

                @if ($autk->twitter)
                    <li class="flex justify-center md:justify-normal gap-1 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 4l11.733 16h4.267l-11.733 -16z"></path>
                            <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772"></path>
                        </svg>
                        {{ $autk->twitter }}
                    </li>
                @endif

                @if ($autk->facebook)
                    <li class="flex justify-center md:justify-normal gap-1 mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                        </svg>
                        {{ $autk->facebook }}
                    </li>
                @endif


            </ul>
        </section>

    </div>

    <div class="px-14">
        <div class="text-center md:text-left md:flex justify-between items-center">
            <div class="flex justify-between gap-4 items-center">
                <a href="#" class="text-gray-400 hover:text-gray-500 mb-4">Politicas de privacidad</a>
                <div class="text-gray-400 hover:text-gray-500 mb-4">|</div>
                <a href="#" class="text-gray-400 hover:text-gray-500 mb-4">Terminos y Condiciones</a>
            </div>
            <div class="text-gray-400">© 2023 Autk</div>
        </div>
    </div>
</footer>
