@extends('template.main')
@section('title')@endsection
@section('content')
    @include('template.partials.logbar')
    <div class="row-fluid">
        <div class="container">
            <div class="jumbotron">
                <h1 class="text-center"> Editar usuario</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-warning">
                    <div class="panel-heading">Actualizar:{{$users->name}}</div>
                    <div class="panel-body">
                        @include('admin.partials.message')
                        <!-- "model" es para cargar los datos, ai q pasar post en la url x eso el route es array-->
                        {!! Form::model($users,['route' => ['admin.users.update',$users], 'method' => 'PUT']) !!}
                        <!-- Campos del formulario -->
                        @include('admin.user.partials.fields')
                        <input type="submit" value="Actualizar" class="btn btn-block btn-success">
                        {!! Form::close() !!}
                        <!--Borrar-->
                        @if(\Auth::user()->username != $users->username)
                        @include('admin.user.partials.delete')
                        @endif
                       
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