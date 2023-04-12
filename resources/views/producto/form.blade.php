    <label for="nombre">Nombre:</label>
    <input id="nombre" type="text" value="{{$producto->nombre}}" name="nombre">
    <br>
    <label for="descripcion">Descripcion</label>
    <input id="descripcion" type="text" value="{{$producto->descripcion}}" name="descripcion">
    <br>
    <label for="precio">Precio</label>
    <input id="precio" type="number" value="{{$producto->precio}}" name="precio">
    <br>
    <label for="stock">Stock:</label>
    <input id="stock" type="number" value="{{$producto->stock}}" name="stock">
    <br>
    <label for="foto">Foto:</label>
    <img src="{{ asset('storage').'/'.$producto->foto }}" width="100" alt="">
    <input id="foto" type="file" value="" name="foto">
    <br>
    <br>
    <input type="submit" value="Guardar Datos">
    <br>