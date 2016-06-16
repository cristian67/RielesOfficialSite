@extends('template.main')
@section('styles')
    {!! Html::style('css/dropzone.css') !!}}
@endsection
@section('content')
    <div class="container">
        <div class="row"    >
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Rieles
                </div>
                <div class="panel-body">
                    <div id ="template">
                        {!! Form::open(['url' =>'music/filesdb',
                                        'method'=>'POST',
                                        'class' =>'dropzone',
                                        'id'    =>'my-dropzone',
                                        'files' => true])!!}}

                        @include('couch.archivos.partials.form')

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@stop