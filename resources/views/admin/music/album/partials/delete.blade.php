
{!! Form::open(['route' => ['home.albums.destroy', $album], 'method' => 'DELETE']) !!}
<!-- EL onclick es para usar con JAVA script -->
<button type="submit" onclick="return confirm('Seguro que desea eliminar, se van a borrar los archivos relacionados tambien??')" class="btn btn-block btn-danger"><i class="fa fa-trash"></i></button>
{!! Form::close()!!}