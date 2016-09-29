@extends('template.main')
@section('title'){{'Discografia'}}@endsection
@section('content')
@include('template.partials.main-nav')
<style type="text/css">
    @media (max-width: 480px) {

 /* Estilo del tag*/
    
    body{
        background-color: black;
    }

    #effect-dexter{
        float:left;
    }

    figure.effect-dexter img {
    -webkit-transition: opacity 0.35s;
    transition: opacity 0.35s;
        float: left;
        padding-top: 0vh;
        text-align: center;
        width: 100%;
        max-width: 100%;
        text-align: center;
        margin-top: 0%;}
}
</style>
<section class="blur  visible-lg visible-md visible-sm">
    <div class="row-fluid" style=" min-height: 50vh; background-size: cover; background-position: center; background-attachment: fixed">
        <div class="blur">
            <div id="artitle" class="croisant">
               <h1 class="croisant">Discografia <span style= "color: orangered;">Rieles</span></h1>
            </div>
        </div>
    </div>
</section>

<section class="blur visible-xs">
    <div class="row-fluid" style=" min-height: 50vh; background-size: cover; background-position: center; background-attachment: fixed">
            <div id="artitle" class="croisant">
               <h1 class="croisant">Discografia <span style= "color: orangered;">Rieles</span></h1>
            </div>
    </div>
</section>
        <body>
            <div class="container visible-lg visible-md visible-sm">
                    <div class="grid">
                        <div class="row-fluid">
                            <div class="col-md-6 visible-lg visible-md visible-sm">
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
            <div class="container-fluid visible-xs">
                    <div class="grid">
                        <div class="row-fluid">
                            <div class="col-xs-6">
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
            <br>
            <br>
            <a href="https://rielesbanda.bandcamp.com/releases" class="btn  btn-success center-block"><i class="fa fa-shopping-cart"></i> Ir a tienda</a>
            <a href="{{route('home')}}" class="btn  btn-primary center-block"><i class="fa fa-chevron-left"></i> Home </a>
        </body>
    
    <div class="visible-lg visible-md visible-sm">
        @include('template.partials.footer')
    </div>
    <div class="visible-xs">
        @include('template.partials.Cellfooter')
    </div>
@stop
