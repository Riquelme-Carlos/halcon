
<form action="{{ url('/producto/'.$producto->id) }}" enctype="multipart/form-data" method="post">
@csrf
{{ method_field('PATCH') }}
@include('producto.form');

</form>
