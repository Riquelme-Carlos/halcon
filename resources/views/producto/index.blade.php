Mostrar la lista de productos
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $productos as $producto )
        <tr>
            <td>{{ $producto->id }}</td>
            <td>
                <img src="{{ asset('storage').'/'.$producto->foto }}" width="100" alt="">
            </td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->descripcion }}</td>
            <td>{{ $producto->precio }}</td>
            <td>{{ $producto->stock }}</td>
            <td>
                <a href="{{ url('/producto/'.$producto->id.'/edit') }}">
                    Editar
                </a>
                |

                <form action="{{ url('/producto/'.$producto->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('Confirmar Eliminacion')" value="Borrar">
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>