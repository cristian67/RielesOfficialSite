@extends('template.main')
@section('title'){{'Galeria'}}@endsection
@section('content')
    @include('template.partials.main-nav')

    <div class="row-fluid" style="background-image: url('../img/albumVenta.jpg'); min-height: 50vh; background-size: cover; background-position: center; background-attachment: fixed">
        <div class="blur">
            <div id="artitle" class="croisant">
                <h1 class="croisant">Galeria <span style= "color: orangered;">Rieles</span></h1>
                <h4 class="croisant"> <span style= "color:darkblue ;">Imagenes</span></h4>
            </div>
        </div>
    </div>
    <body class="fondo3">
    <div class="container">
        <div class="gallery">
            @foreach($galeria as $g)
                    <ul>
                        <li><img src="{{$g->url}}" alt="{{$g->description}}"></li>
                    </ul>
            @endforeach
        </div>
    </div>
    </body>
    @include('template.partials.footer')
@stop
