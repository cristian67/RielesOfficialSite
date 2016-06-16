@extends('template.main')
@section('title')@endsection
@section('content')
    @include('template.partials.main-nav')
    <body class="fondo2">
    <div class="background2 center-block" align="center">
        <div id="title" style="font-family: 'Akronim', cursive; color: #BE5C00;">Rieles</div>
                <div  align="center" >
                    <h2 style="color: #2b542c">Integrantes</h2> <h4 style="color:orangered">Voz: Julissa Olivares / Guitarras Ivan Avilés-Juan Pablo Lara / Bajo: Tomas Nahum / Batería: Joel Donoso</h4>
                    <h2 style="color: #2b542c">Ciudad origen</h2> <h4 style="color:orangered">Santiago de Chile
                    <h2 style="color: #2b542c">Biografia</h2> <h4 style="color:orangered">Banda de Rockpop Alternativo. Cuenta con 5 integrantes, se forma en Santiago de Chile a mediados del año 2013 como "Numbed" nombre con el cual tuvieron lugar en algunas presentaciones en la comuna de San Bernardo.
                    Comienzan a grabar su primer EP el mismo año junto a Marcelo Donoso, y en el transcurso cambian su nombre para definirse como "Rieles". Con este, lanzarán lo que llamaron "Sonidos al azar" EP, cuenta con 5 temas, de temática introspectiva.
                    Los miembros de la banda son Julissa Olivares en las voces, Ivan Avilés y Juan Pablo Lara en guitarras, Tomas Nahum como bajista y Joel Donoso en la batería.</h4>
                    <h2 style="color: #2b542c">Fono</h2><h4 style="color:orangered">09 7615 4792</h4>
                    <h2 style="color: #2b542c">Correo</h2> <h4 style="color:orangered">rielesbanda@gmail.com></h4>
                    <h2 style="color: #2b542c">Sitio-web (ventas) </h2> <h4 style="color:orangered">https://rielesbanda.bandcamp.com/</h4>
                        <a href="{{route('home')}}" class="btn  btn-primary"><i class="fa fa-chevron-left"></i> Home </a>
                </div>
            </div>
        </div>
    </div>
    </body>
@stop