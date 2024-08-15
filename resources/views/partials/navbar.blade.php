<thead class="table table-bordered">
    <tr>
        <th scope="col" class="{{ setActivo('home') }}"><a href="{{ route('home') }}">Home</a></th>
        <th scope="col" class="{{ setActivo('ser') }}"><a href="{{ route('ser') }}">Servicios</a></th>
        <th scope="col" class="{{ setActivo('proyectos') }}"><a href="{{ route('proyectos') }}">Proyectos</a></th>
        <th scope="col" class="{{ setActivo('servicios') }}"><a href="{{ route('servicios') }}">Clientes</a></th>
        <th scope="col" class="{{ setActivo('blog') }}"><a href="{{ route('blog') }}">Blog</a></th>
        <th scope="col" class="{{ setActivo('contacto') }}"><a href="{{ route('contacto') }}">Contacto</a></th>
        
<!-- 
        @guest
            <th><a href="{{ route('login') }}">Login</a></th>
        @else
            <th>
                <a href="#" onclick="event.preventDefault(); document.getElementById('Logout-form').submit();">Cerrar Sesión</a>
            </th>
        @endguest -->

        </tr>
</thead>

<form id="Logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>