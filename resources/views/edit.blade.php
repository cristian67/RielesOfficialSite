@extends('template.main')
@section('title'){{'Editando página | ' . $post->title }}@endsection
@section('content')
    @include('template.partials.logbar')
    <div class="row-fluid">
        <div class="container">
            <div class="jumbotron">
                    <h1 class="text-center"> Edita tú publicación</h1>
            </div>
        </div>
        <div class="container">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                {!!Form::open(['url' => 'admin/posts/'.$post->id.'/refresh', 'autocomplete'=> 'off'])  !!}
                    <!-- Contenido ha ser cambiado -->
                    <fieldset>
                        <label>Titulo</label>
                        <input type ="text" name="title" value="{{$post->title}}" class="form-control">
                        <br>
                        <label>Descripción:</label>
                        <input type ="text" name="description" value="{{$post->description}}" class="form-control">
                        <br>
                        <label>Contenido:</label>
                            <textarea name="content" id="editor" cols="30" rows="7" class="form-control">
                                {{$post->content}}
                            </textarea>
                        <br>
                        <label>Tags:</label>
                        <input type ="text" name="tags" value="{{$post->tags}}" class="form-control">
                        <br>
                        <label>Imagen:</label>
                        <input type ="text" name="photo" value="{{$post->photo}}" class="form-control">
                        <br>
                        <label>Multimedia:</label>
                        <input type ="text" name="video" value="{{$post->video}}" class="form-control">
                        <br>
                        <input type="submit" value="Actualizar" class="btn btn-block btn-primary">
                    </fieldset>
                {!!Form::close()!!}
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <br><br>
    @include('template.partials.footer')
@endsection
@section('js')
    <script>
        $('#editor').trumbowyg();
    </script>
@stop
