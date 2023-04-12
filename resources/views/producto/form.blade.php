    @extends('layouts.app')
    @section('content')
    <div class="container">

        <label for="nombre">Nombre:</label>
        <input id="nombre" type="text" value="{{isset($producto->nombre)?$producto->nombre:''}}" name="nombre">
        <br>
        <label for="descripcion">Descripcion</label>
        <input id="descripcion" type="text" value="{{isset($producto->descripcion)?$producto->descripcion:''}}" name="descripcion">
        <br>
        <label for="precio">Precio</label>
        <input id="precio" type="number" value="{{isset($producto->precio)?$producto->precio:''}}" name="precio">
        <br>
        <label for="stock">Stock:</label>
        <input id="stock" type="number" value="{{isset($producto->stock)?$producto->stock:''}}" name="stock">
        <br>
        <label for="foto">Foto:</label>
        @if(isset($producto->foto))
        <img src="{{ asset('storage').'/'.$producto->foto }}" width="100" alt="">
        @endif
        <input id="foto" type="file" value="" name="foto">
        <br>
        <br>
        <input type="submit" value="Guardar Datos">
        <a href="{{ url('producto/') }}">Regresar</a>
        <br>
    </div>
    @endsection