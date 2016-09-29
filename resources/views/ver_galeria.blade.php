@extends('template.main')
@section('title'){{'Galeria'}}@endsection
@section('content')
    @include('template.partials.main-nav')
<section class="blur">
    <div class="row-fluid" style="min-height: 50vh; background-size: cover; background-position: center; background-attachment: fixed"> 
            <div id="artitle" class="croisant">
                <h1 class="croisant">Galeria <span style= "color: orangered;">Rieles</span></h1>
                <h4 class="croisant"> <span style= "color:darkblue ;">Imagenes</span></h4>
        </div>
    </div>
</section>
    <body>
    <div class="container">
        @foreach($galeria as $g)
            @if($g->type != 'imagen')
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="600" height="338" src="{{$g->url}}" frameborder="1" allowfullscreen></iframe>
                </div>
                <p></p>
                <div align="center">
                    <label class="label label-warning "align="left"><i class="glyphicon glyphicon-calendar">Creado : {{$g->created_at}}</i></label>
                </div>
            @endif
            <p>
            <p>
            @if($g->type != 'video')
                <div class="gallery">
                    <ul>
                        <li><img src="{{$g->url}}" alt="{{$g->description}}"></li>
                    </ul>
                </div>
            @endif
        @endforeach
    </div>
    <a href="{{route('home')}}" class="btn  btn-primary center-block"><i class="fa fa-chevron-left"></i> Home </a>
    </body>
    <div class="visible-lg visible-md visible-sm">
        @include('template.partials.footer')
    </div>
    <div class="visible-xs">
        @include('template.partials.Cellfooter')
    </div>
@stop
