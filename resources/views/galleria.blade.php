@extends('template.main')
@section('title'){{'Galeria'}}@endsection
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
                                @foreach($galeria as $g)
                                <figure class="effect-dexter">
                                        <img src="{{$g->photo}}" alt="img12"/>
                                        <figcaption>
                                            <h3>{{$g->title}} <span style= "color: orangered;font-family: 'Covered By Your Grace', cursive;">RIELES</span></h3>
                                            <p>{{$g->description}}</p>
                                            @if($g->type != 'video')
                                            <a href='/galeria/imagenes/{{$g->id}}'>View more</a>
                                            @endif
                                            @if($g->type != 'imagen')
                                                <a href='/galeria/videos/{{$g->id}}'>View more</a>
                                            @endif
                                        </figcaption>
                                </figure>
                                @endforeach
                            </div>
                        </div>
                    </div>
            </div>
            <div class="container" align="center">
                {!! $galeria->render()!!}
            </div>
        </body>
@include('template.partials.footer')
@stop
