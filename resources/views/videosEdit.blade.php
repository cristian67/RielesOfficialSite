@extends('template.main')
@section('title'){{'Editando página | Videos'  }}@endsection
@section('content')
    @include('template.partials.logbar')
        <!-- tabla -->
<div class="row-fluid">
    <div class="container" id="admin">
        @if(\Session::has('alert'))
            <div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{\Session::get('alert')}}</strong>.
            </div>
        @endif
        <table  class="table table-striped table-hover ">
            <thead>
            <th>Video</th>
            <th>Fecha</th>
            <th class="foo">Acciones</th>
            </thead>
            <tbody>
            @foreach($videos as $x)
                <tr>
                    <td>{{$x->video}}</td>
                    <td>{{$x->created_at}}</td>
                    <td>
                        <div class="btn-group-center">
                            <a href="admin/posts/{{$x->id}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                            <a href="admin/posts/{{$x->id}}/delete" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    </div>
@stop
