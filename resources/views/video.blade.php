@extends('template.main')
@section('title'){{ 'Rieles | Videos'  }}@endsection
@section('content')
    @include('template.partials.main-nav')
    <div>
        <div class="row-fluid">
            <div class="jumbotron">
                <h1 class="text-center">Rieles<br>
                    <small>Videos</small></h1>
            </div>
        </div>
    </div>

    <!--Contenido del post-->
    <section id="videos">
        <div class="row-fluid">
            <div class="container well">
                <div class="col-xs-12">
                    @foreach($videos as $v)
                        <div class="center-block">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe  width="600" height="338" src="{{$v->video}}" frameborder="1" allowfullscreen></iframe>
                            </div>
                            </br>
                        </div>
                    @endforeach
                </div>
                <div class="container" align="center">
                    {!! $videos->render()!!}
                </div>
            </div>
        </div>
    </section>
    @include('template.partials.footer')
@stop
@stop