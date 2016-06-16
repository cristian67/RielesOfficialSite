<div class="form-group">
    {!!  Form::label('', 'Titulo:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!!  Form::label('', 'Descripción:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('cash', 'Precio:') !!}
    {!! Form::selectRange('cash', 1 , 1000,null,['placeholder' => 'cuál es el precio?', 'class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!!  Form::label('photo', 'Imagen-Presentación:') !!}
    {!! Form::text('photo', null, ['class' => 'form-control']) !!}
</div>