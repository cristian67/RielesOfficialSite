@extends('template.main')
@section('title'){{'Discografia'}}@endsection
@section('content')
@include('template.partials.main-nav')

<div class="row-fluid" style="background-image: url('../img/albumVenta.jpg'); min-height: 50vh; background-size: cover; background-position: center; background-attachment: fixed">
    <div class="blur">
        <div id="artitle" class="croisant">
           <h1 class="croisant">Galeria <span style= "color: orangered;">Rieles</span></h1>
        </div>
    </div>
</div>
        <body class="fondo">
            <div class="container">
                    <div class="grid">
                        <div class="row">
                            <div class="col-xs-12">
                                @foreach($disco as $d)
                                    <figure class="effect-dexter">
                                        <img src="{{$d->photo}}" alt="img12"/>
                                        <figcaption>
                                            <h3>{{$d->title}} <span style= "color: orangered;font-family: 'Covered By Your Grace', cursive;">RIELES</span></h3>
                                            <p>{{$d->description}}</p>
                                            <a href='/discografia/music/{{$d->id}}'>View more</a>
                                        </figcaption>
                                    </figure>
                                @endforeach
                            </div>
                        </div>
                    </div>
            </div>
            <div class="container" align="center">
                {!! $disco->render()!!}
            </div>
        </body>
@include('template.partials.footer')
@stop
