@extends('template.main')
@section('title')@endsection
@section('content')
    @include('template.partials.logbar')
    <div class="row-fluid">
        <div class="container">
            <div class="jumbotron">
                <h1 class="text-center"> Edita tú publicación</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-warning">
                    @foreach($posts as $p)
                    <div class="panel-heading">Actualizar:{{$p->title}}</div>
                    <div class="panel-body">
                        @include('admin.partials.message')
                        <!-- "model" es para cargar los datos, ai q pasar post en la url x eso el route es array-->
                        {!! Form::model($p,['route' => ['home.posts.update',$p], 'method' => 'PUT']) !!}
                        <!-- Campos del formulario -->
                        @include('admin.posts.partials.fields')
                        <input type="submit" value="Actualizar" class="btn btn-block btn-success">
                        {!! Form::close() !!}
                        <!--Borrar-->
                        @include('admin.posts.partials.delete')
                    </div>
                </div>
                    @endforeach
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