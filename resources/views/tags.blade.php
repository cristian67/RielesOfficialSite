@extends('template.main')
@section('title'){{'Contenido de etiqueta | Larablog'}}@endsection
@section('content')
    <div class="row-fluid" id="tag">
        <div class="blur">
            <div id="tagged" class="croisant">
                Articulos etiquetados con <div class="text-danger">{{$tag}}</div>
            </div>
        </div>
    </div>
    <div class="row-fluid">
        @foreach($post as $p)
            <div class="col-md-4 tgs" style="min-height: 40vh; background-image: url('{{$p->photo}}'); background-size:cover; background-position:center; border-bottom: 3px solid white;">
                <div class="blur">
                    <div id="taggex" class="croisant">
                        <a href="/articulos/{{$p->slug}}">{{$p->title}}</a>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="col-md-4 tgs" id="bhome">
            <div class="blur">
                <div id="taggex" class="croisant">
                    <a href="{{route('home')}}" >Regresar a <br>HOME</a>
                </div>
            </div>
        </div>
    </div>
@endsection