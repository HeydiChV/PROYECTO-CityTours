<header>
    <div>
        <h1>City Tours Puno</h1>
        <p>Descubre los encantos de la ciudad de Puno, Perú</p>
    </div>
    
    <nav>
        <ul>
            <li><a href="{{ route('paquetes.index') }}">Paquetes Turísticos</a></li>
            <li><a href="{{ route('reservas.index') }}">Tus Reservas</a></li>
            <li><a href="{{ route('perfil.show') }}">Tu Perfil</a></li>
           
        </ul>
    </nav>

    <div>
        @auth
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit">Cerrar Sesión</button>
            </form>
        @else
            <a href="{{ route('login') }}">Iniciar Sesión</a>
            <a href="{{ route('register') }}">Registrarse</a>
        @endauth
    </div>
</header>
