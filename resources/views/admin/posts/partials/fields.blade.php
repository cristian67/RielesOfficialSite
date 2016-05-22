<div class="form-group">
    {!!  Form::label('', 'titulo:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!!  Form::label('description', 'descripcion:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!!  Form::label('content', 'contenido:') !!}
    {!! Form::textarea ('content', null, ['class' => 'form-control','id'=>'editor']) !!}
</div>
<div class="form-group">
    {!!  Form::label('tags', 'tag:') !!}
    {!! Form::text('tags', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!!  Form::label('photo', 'imagen:') !!}
    {!! Form::text('photo', null, ['class' => 'form-control']) !!}
</div>