@extends('template.main')
@section('title')@endsection
@section('content')
    @include('template.partials.logbar')
    <div class="row-fluid">
        <div class="container">
            <div class="jumbotron">
                <h1 class="text-center"> Generar multimedia</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-success">
                    <div class="panel-heading">Nuevo Imagen & video</div>
                    <div class="panel-body">
                        <!-- PARA VALIDAR-->
                        @include('admin.partials.message')
                        {!! Form::open(['route' => 'home.multimedias.store', 'method' => 'POST']) !!}
                        @include('admin.galeria.multimedia.partials.field')
                        <br>
                        <input type="submit" value="Crear" class="btn btn-block btn-success">
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@include('template.partials.footer')
@endsection
@section('js')
    <script>
        $('#editor').trumbowyg();
    </script>
@stop