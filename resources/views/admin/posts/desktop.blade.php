@extends('template.main')
@section('title')@endsection
@section('content')
@include('template.partials.logbar')
        <!-- tabla -->
<div class="row-fluid">
    <div class="container" id="admin">
        @if(Session::has('message'))

            <p class="alert alert-info">{{Session::get('message')}} </p>
        @endif

        <table  class="table table-striped table-hover table-bordered">
            <thead style="color: deepskyblue">
            <th>Titulo</th>
            <th>Descripción</th>
            <th>tags</th>
            <th class="foo">Acciones</th>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->tag->tags}}</td>
                    <td>
                        <div class="btn-group-center">
                            <a href="{{route('home.posts.edit',$post)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="container" align="center">
            {!! $posts->render()!!}
        </div>
    </div>
</div>
@stop
