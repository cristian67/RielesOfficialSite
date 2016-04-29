@extends('template.main')
@section('title'){{'Crear Publicacion | ' . \Auth::user()->username }}@endsection
@section('content')
    @include('template.partials.logbar')
    <div class="row-fluid">
        <div class="container">
            <div class="jumbotron">
                <h1 class="text-center"> Crear tú publicación</h1>
            </div>
        </div>
        <div class="container">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                {!!Form::open(['url' => 'admin/posts/new', 'autocomplete'=> 'off'])  !!}
                        <!-- Contenido ha ser cambiado -->
                <fieldset>
                    <input type ="text" name="title" placeholder="Titulo del post" class="form-control">
                    <br>
                    <input type ="text" name="description"  placeholder="Descripción del post" class="form-control">
                    <br>
                    <textarea name="content" id="editor" cols="30" rows="7" class="form-control" placeholder="Redacta tu post"></textarea>
                    <br>
                    <input type ="text" name="tags" placeholder="Etiquetas (separar por coma)" class="form-control">
                    <br>
                    <input type ="text" name="photo" placeholder="Inserta imagen (URL)" class="form-control">
                    <br>
                    <input type ="text" name="video" placeholder="Inserta video (URL)" class="form-control">
                    <br>
                    <input type="submit" value="Crear" class="btn btn-block btn-success">
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