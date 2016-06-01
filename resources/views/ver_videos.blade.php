@extends('template.main')
@section('title'){{'Galeria'}}@endsection
@section('content')
    @include('template.partials.main-nav')


    <div class="row-fluid" style="background-image: url('../img/albumVenta.jpg'); min-height: 50vh; background-size: cover; background-position: center; background-attachment: fixed">
        <div class="blur">
            <div id="artitle" class="croisant">
                <h1 class="croisant">Galeria <span style= "color: orangered;">Rieles</span></h1>
                <h4 class="croisant"> <span style= "color:darkred ;">Videos</span></h4>
            </div>
        </div>
    </div>
    <hr>
    <body class="fondo3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-12">
                    @foreach($galeria as $g)
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="600" height="338" src="{{$g->url}}" frameborder="1" allowfullscreen></iframe>
                        </div>
                        <p></p>
                        <div align="center">
                            <label class="label label-info"><i class="glyphicon glyphicon-book">Descrip: {{$g->description}}</i></label>
                            <label class="label label-warning "align="left"><i class="glyphicon glyphicon-calendar">Creado : {{$g->created_at}}</i></label>
                        </div>
                        <p>
                        <p>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
    @include('template.partials.footer')
@stop
