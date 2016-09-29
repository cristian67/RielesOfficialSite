@extends('template.main')
@section('title'){{'Galeria'}}@endsection
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

<section class="blur">
    <div class="row-fluid" style="min-height: 50vh; background-size: cover; background-position: center; background-attachment: fixed">
            <div id="artitle" class="croisant">
               <h1 class="croisant">Galeria <span style= "color: orangered;">Rieles</span></h1>
            </div>
    </div>
</section>        

        <body>
            <div class="container-fluid">
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
            <br>
            <br>
            <a href="{{route('home')}}" class="btn  btn-primary center-block"><i class="fa fa-chevron-left"></i> Home </a>
        </body>
        
    <div class="visible-lg visible-md visible-sm">
        @include('template.partials.footer')
    </div>
    <div class="visible-xs">
        @include('template.partials.Cellfooter')
    </div>
@stop
