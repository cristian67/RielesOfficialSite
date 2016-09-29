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
                <div class="panel panel-danger">
                    <div class="panel-heading">Usuarios</div>
                    <p> Hay {{ $users->lastPage() }} páginas ,
                        existen {{ $users->total() }} registros</p>
                    <div class="panel body">
                    @if(Session::has('message'))
                        <p class="alert alert-info">{{Session::get('message')}} </p>
                    @endif
                    <table  class="table table-striped table-hover table-bordered">
                        <thead style="color: deepskyblue">
                        <th>Nombre</th>
                        <th>Username</th>
                        <th class="foo">Acciones</th>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->username}}</td>
                                <td>
                                    <div class="btn-group-center">
                                        <a href="{{route('admin.users.edit',$user)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="container-fluid" align="center">
                        {!! $users->render()!!}
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@include('template.partials.Adminfooter')
@stop
