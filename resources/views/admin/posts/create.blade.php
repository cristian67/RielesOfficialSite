@extends('template.main')
@section('title')@endsection
@section('content')
    @include('template.partials.logbar')
    <div class="row-fluid">
        <div class="container">
            <div class="jumbotron">
                <h1 class="text-center"> Crear tú publicación</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-success">
                    <div class="panel-heading">Nuevo Usuario</div>
                    <div class="panel-body">
                        <!-- PARA VALIDAR-->
                        @include('admin.partials.message')
                        {!! Form::open(['route' => 'home.posts.store', 'method' => 'POST']) !!}
                         @include('admin.posts.partials.fields')
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