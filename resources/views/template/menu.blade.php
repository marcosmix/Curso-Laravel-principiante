<nav>
    <ul>
        <li>Categoria</li>
        <li>Usuarios</li>
        <li>Etiquetas</li>
        <li>Gastos</li>
        <li>Pagos</li>
        <li>Balance</li>
        <li>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button>Salir</button>
            </form>
        </li>
    </ul>
    
    
    
</nav>