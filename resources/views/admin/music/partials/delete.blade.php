
{!! Form::open(['route' => ['home.songs.destroy', $song], 'method' => 'DELETE']) !!}
<!-- EL onclick es para usar con JAVA script -->
<button type="submit" onclick="return confirm('Seguro que desea eliminar?')" class="btn btn-block btn-danger"><i class="fa fa-trash"></i></button>
{!! Form::close()!!}