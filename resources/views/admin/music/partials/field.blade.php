<div class="form-group">
    {!!  Form::label('', 'titulo:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','placeholder'=>'Ingresar titulo']) !!}
</div>

<div class="form-group">
    {!!  Form::label('lyrics', 'lyrics:') !!}
    {!! Form::textarea ('lyrics', null, ['class' => 'form-control','id'=>'editor','placeholder'=>'Ingresar lyris de tu canción, intenta no dejar espacio en el final']) !!}
</div>

<div class="form-group">
    {!! Form::label('cash', 'precio:') !!}
    {!! Form::selectRange('cash', 1 , 1000,null,['placeholder' => 'cuál es el precio?', 'class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!!  Form::label('ruta', 'SoundCloud:') !!}
    {!! Form::text('ruta', null, ['class' => 'form-control','placeholder'=>'Ingresar cancion de SoundCloud, SHARE->EMBED->Copiar codigo ej:<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/217220872&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe> ']) !!}
</div>

<div>
    {!! Form::label('categorie', 'Categoria') !!}
    {!! Form::select('albums_id', $categories, null, ['placeholder' => 'Selecciona un Album', 'class' => 'form-control' ]) !!}
</div>