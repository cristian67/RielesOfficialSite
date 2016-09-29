<div class="form-group">
    {!!  Form::label('', 'titulo:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','placeholder'=>'Ingresar titulo']) !!}
</div>
<div class="form-group">
    {!!  Form::label('description', 'descripcion:') !!}
    {!! Form::text('description', null, ['class' => 'form-control','placeholder'=>'Ingresar descripcion']) !!}
</div>
<div class="form-group">
    {!!  Form::label('content', 'contenido:') !!}
    {!! Form::textarea ('content', null, ['class' => 'form-control','id'=>'editor','placeholder'=>'Ingresar contenido']) !!}
</div>
<div class="form-group">
    {!!  Form::label('tags', 'tag:') !!}
    {!! Form::text('tags', null, ['class' => 'form-control','placeholder'=>'Ingresar tags separandolo por "," ej: rielesbanda,2016']) !!}
</div>
<div class="form-group">
    {!!  Form::label('photo', 'imagen:') !!}
    {!! Form::text('photo', null, ['class' => 'form-control','placeholder'=>'Ingresar URL de la imagen ej: http://cdn01.ib.infobae.com/adjuntos/162/imagenes/014/014/0014014674.jpg']) !!}
</div>