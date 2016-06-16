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
            <th class="foo">Acciones</th>
            </thead>
            <tbody>
            @foreach($galerias as $s)
                <tr>
                    <td>{{$s->title}}</td>
                    <td>{{$s->description}}</td>
                    <td>
                        <div class="btn-group-center">
                            <a href="{{route('home.galerias.edit',$s->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="container" align="center">
            {!! $galerias->render()!!}
        </div>
    </div>
</div>
</body>
@include('template.partials.Adminfooter')
@stop
