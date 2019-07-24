

 <!-- enlace a las rutas -->

 <li class="nav-item dropdown">
    <a
        class="nav-link dropdown-toggle"
        href="#"
        id="navbarDropdownMenuLink"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
    >
    
        {{ __("INVITADO") }}
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a
            class="dropdown-item"
           href="{{ route('login') }}"
        >
           {{ __("Iniciar Sesión") }}
        </a>
        <a
                class="dropdown-item"
                href="{{ route('register') }}"
        >
            {{ __("Registrarme") }}
        </a>
    </div>
</li>