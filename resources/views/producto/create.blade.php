Formulario de creacion de productos
<form action="{{ url('/producto') }}" method="post" enctype="multipart/form-data">
@csrf

    <label for="nombre">Nombre:</label>
    <input id="nombre" type="text" name="nombre">
    <br>
    <label for="descripcion">Descripcion</label>
    <input id="descripcion" type="text" name="descripcion">
    <br>
    <label for="precio">Precio</label>
    <input id="precio" type="number" name="precio">
    <br>
    <label for="stock">Stock:</label>
    <input id="stock" type="number" name="stock">
    <br>
    <label for="foto">Foto:</label>
    <input id="foto" type="file" name="foto">
    <br>
    <br>
    <input type="submit" value="Guardar Datos">
    <br>
</form>