

@extends('template.main')
@section('title'){{'Contenido de etiqueta | Larablog'}}@endsection
@section('content')
    <style>

        #tag{
            background-image: url('https://scontent-grt2-1.xx.fbcdn.net/hphotos-xta1/v/t1.0-9/11822526_875501389201241_2226980070287557737_n.jpg?oh=c6f19535699aed3528b1a93241738b1d&oe=57971617');
            min-height: 35vh;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            border-bottom: 5px solid tomato;
        }

        #tagged	{
            color: white;
            font-size: 3em;
            padding-top: 12vh;
            text-align: center;
        }

        .tgs{
            padding:0px;
        }

        #taggex{
            color: white;
            font-size: 2.5em;
            padding-top: 14vh;
            text-align: center;
        }

        #taggex:hover{
            color: steelblue;
            font-size: 2.5em;
            padding-top: 14vh;
            text-align: center;
            text-decoration: none;
        }

        .tl:hover{
            cursor: pointer;
        }

        #bhome{
            min-height: 40vh;
            background-image: url('https://download.unsplash.com/photo-1428223501723-d821c5d00ca3');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
    </style>

    <div class="row-fluid" id="tag">
        <div class="blur">
            <div id="tagged" class="croisant">
                Articulos etiquetados con <div class="text-danger">{{$tag}}</div>
            </div>
        </div>
    </div>
    <div class="row-fluid">
        @foreach($posts as $p)
            <div class="col-md-4 tgs" style="min-height: 40vh; background-image: url('{{$p->photo}}'); background-size:cover; background-position:center; border-bottom: 3px solid white;">
                <div class="blur">
                    <div id="taggex" class="croisant">
                        <a href="../articulos/{{$p->slug}}">{{$p->title}}</a>
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