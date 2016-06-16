@extends('template.main')
@section('title')@endsection
@section('content')
@include('template.partials.logbar')
<!-- tabla -->
<body class="fondo4">
<div class="row-fluid">
    <div class="container" id="admin">
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
                    <td>${{$s->precio}}.0</td>
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
</body>
@include('template.partials.Adminfooter')
@stop
