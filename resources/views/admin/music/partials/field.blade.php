<div class="form-group">
    {!!  Form::label('', 'titulo:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!!  Form::label('lyrics', 'lyrics:') !!}
    {!! Form::textarea ('lyrics', null, ['class' => 'form-control','id'=>'editor']) !!}
</div>

<div class="form-group">
    {!! Form::label('cash', 'precio:') !!}
    {!! Form::selectRange('cash', 1 , 1000,null,['placeholder' => 'cuál es el precio?', 'class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!!  Form::label('ruta', 'SoundCloud:') !!}
    {!! Form::text('ruta', null, ['class' => 'form-control']) !!}
</div>

<div>
    {!! Form::label('categorie', 'Categoria') !!}
    {!! Form::select('albums_id', $categories, null, ['placeholder' => 'Selecciona una categoria', 'class' => 'form-control' ]) !!}
</div>