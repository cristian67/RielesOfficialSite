@extends('template.main')
@section('title'){{'Contenido de etiqueta | Larablog'}}@endsection
@section('content')
<style type="text/css">
    @media (max-width: 500px) {

 /* Estilo del tag*/
    
    body{
        background-color: black;
    }


    #tag{
        min-height: 15vh;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        border-bottom: 1px solid tomato;
    }

    #tagged {
        color: white;
        font-size: 1.4em;
        padding-top: 10vh;
        text-align: center;
        width: 110%;
        max-width: 110%;
        color: white;
        text-align: center;
        margin-top: 2%;
    }

    .tgs{
        padding:0px;
        width: 100%;
        max-width: 100%;
        color: white;
        text-align: center;
        margin-top: 2%;

    }

    #taggex{
        color: white;
        font-size: 1.3em;
        padding-top: 14vh;
        text-align: center;
         width: 100%;
        max-width: 100%;
        color: white;
        text-align: center;
        margin-top: 2%;

        
    }

    #taggex:hover{
        color: steelblue;
        font-size: 1.8em;
        padding-top: 4vh;
        text-align: center;
        text-decoration: none;
         width: 100%;
        max-width: 100%;
        color: white;
        text-align: center;
        margin-top: 2%;

    }

    .tl:hover{
        cursor: pointer;
        width: 50%;
        max-width: 50%;
        color: white;
        text-align: center;
        margin-top: 2%;

    }

    #bhome{
        min-height: 40vh;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
         width: 100%;
        max-width: 100%;
        color: white;
        text-align: center;
        margin-top: 2%;

    }
}


</style>
<section class="blur ">
    <div class="row-fluid" id="tag">
            <div id="tagged" class="croisant">
                Articulos etiquetados con <div class="text-danger">{{$tag}}</div>
            </div>
    </div>
</section>
<body>
<div class="row-fluid" >
        @foreach($post as $p)
            <div class="col-md-4  tgs" style="min-height: 40vh; background-image: url('{{$p->photo}}'); background-size:cover; background-position:center; border-bottom: 4px solid white;">
                    <div id="taggex" class="croisant">
                        <a href="/articulos/{{$p->slug}}">{{$p->title}}</a>
                    </div>
            </div>
        @endforeach
        <div class="blur">
        <div class=" tgs" id="bhome">
                <div id="taggex" class="croisant">
                    <a href="{{route('home')}}" >Regresar a <br>HOME</a>
                </div> 
            </div>
        </div>
    </div>
</body>    
@endsection