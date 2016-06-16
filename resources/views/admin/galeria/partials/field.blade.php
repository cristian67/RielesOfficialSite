<div class="form-group">
    {!!  Form::label('', 'titulo:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!!  Form::label('description', 'Descripción:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!!  Form::label('photo', 'Imagen Fondo:') !!}
    {!!  Form::text('photo', null, ['class' => 'form-control']) !!}
</div>

<div>
    {!! Form::label('type', 'Tipo:') !!}
    {!! Form::select('type', array('1' => 'imagen', '2' => 'video'),null,['placeholder' => 'Selecciona una categoria', 'class' => 'form-control' ]) !!}
</div>
