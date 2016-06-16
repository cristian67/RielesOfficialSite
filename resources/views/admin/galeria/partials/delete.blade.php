
{!! Form::open(['route' => ['home.multimedias.destroy', $galerias], 'method' => 'DELETE']) !!}
<!-- EL onclick es para usar con JAVA script -->
<button type="submit" onclick="return confirm('Seguro que desea eliminar?')" class="btn btn-block btn-danger"><i class="fa fa-trash"></i></button>
{!! Form::close()!!}