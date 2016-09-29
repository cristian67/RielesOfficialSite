
<div class="form-group">
    {!!  Form::label('description', 'Descripción:') !!}
    {!! Form::text('description', null, ['class' => 'form-control','placeholder'=>'Ingresar descripcion']) !!}
</div>

<div class="form-group">
    {!!  Form::label('url', 'Foto/video:') !!}
    {!! Form::text('url', null, ['class' => 'form-control','placeholder'=>'Ingresar imagen ej : http://cdn01.ib.infobae.com/adjuntos/162/imagenes/014/014/0014014674.jpg']) !!}
</div>

<div>
    {!! Form::label('type', 'Tipo:') !!}
    {!! Form::select('type', array('1' => 'imagen', '2' => 'video'),null,['placeholder' => 'Selecciona una categoria', 'class' => 'form-control' ]) !!}
</div>

<div>
    {!! Form::label('categorie', 'Categoria') !!}
    {!! Form::select('galerias_id', $categories, null, ['placeholder' => 'Selecciona una categoria', 'class' => 'form-control' ]) !!}
</div>
