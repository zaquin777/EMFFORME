<!-- component -->
<header class="header sticky top-0 bg-white shadow-lg flex items-center justify-between px-8 py-02">
    <div class="spacer">
        
    </div>
    <!-- logo -->
    <h1 class="w-2/12">
        <a href="">
            <img src="{{ Vite::asset('resources/images/logo-imag-menu.avif') }}">
        </a>
    </h1>

    <!-- navigation -->
    <nav class="nav font-semibold text-lg">
        <ul class="flex items-center">
            <li
                class="p-4 border-opacity-0 hover:border-opacity-100 hover:text-orange-500 duration-200 cursor-pointer active">
                <a href="{{route('home')}}">Início</a>
            </li>
            <li
                class="p-4 border-opacity-0 hover:border-opacity-100 hover:text-orange-500 duration-200 cursor-pointer">
                <a href="{{route('sobre')}}">Sobre</a>
            </li>
            <li
                class="p-4 border-opacity-0 hover:border-opacity-100 hover:text-orange-500 duration-200 cursor-pointer">
                <a href="{{route('missao')}}">Missão</a>
            </li>
            <li
                class="p-4 border-opacity-0 hover:border-opacity-100 hover:text-orange-500 duration-200 cursor-pointer">
                <a href="{{route('contato')}}">Contato</a>
            </li>
        </ul>
    </nav>

    <div class="spacer">

    </div>

</header>