@extends('template.main')
@section('title')@endsection
@section('content')
@include('template.partials.logbar')
<!-- tabla -->
<style>
    .panel{
        background: rgba(46, 51, 56, 0.2)!important;
    }
</style>
<body class="fondo4">
<div class="container" id="admin">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">Canciones</div>
                <p> Hay {{ $songs->lastPage() }} páginas ,
                    existen {{ $songs->total() }} registros</p>
                <div class="panel body">
                @if(Session::has('message'))
                    <p class="alert alert-info">{{Session::get('message')}} </p>
                @endif
                <table  class="table table-striped table-hover table-bordered">
                    <thead style="color: deepskyblue">
                    <th>Titulo</th>
                    <th>Descripción</th>
                    <th>Album</th>
                    <th class="foo">Acciones</th>
                    </thead>
                    <tbody>
                    @foreach($songs as $s)
                        <tr>
                            <td>{{$s->titulo}}</td>
                            <td>${{$s->precio}}</td>
                            <td>{{$s->title}}</td>
                            <td>{{$s->id_song}}</td>
                            <td>
                                <div class="btn-group-center">
                                    <a href="{{route('home.songs.edit',$s->id_song)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
                <div class="container" align="center">
                    {!! $songs->render()!!}
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@include('template.partials.Adminfooter')
@stop
