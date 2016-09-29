@extends('template.main')
@section('title')@endsection
@section('content')
    @include('template.partials.main-nav')
    <style type="text/css">
    .panel{
        background: rgba(46, 51, 56, 0.1)!important;
    }
    </style>
<body class="fondo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-success visible-lg visible-md visible-sm">
                    <div class="panel-body visible-lg visible-md visible-sm">
                        <div class="background2 center-block" align="center">
                            <div id="title" style="font-family: 'Akronim', cursive; color: #BE5C00;">Rieles</div>
                            <h2 class="paz" style="color: #12ca12">Integrantes</h1><h3 class="indie" style="color:orangered">Voz: Julissa Olivares / Guitarras Ivan Avilés-Juan Pablo Lara / Bajo: Tomas Nahum / Batería: Joel Donoso</h3>
                                <h2 class="paz" style="color: #12ca12">Ciudad origen</h2> <h3 class="indie" style="color:orangered">Santiago de Chile</h3>
                                <h2 class="paz" style="color: #12ca12">Biografia</h2> <h3 class="indie" style="color:orangered">Banda de Rockpop Alternativo. Cuenta con 5 integrantes, se forma en Santiago de Chile a mediados del año 2013 como "Numbed" nombre con el cual tuvieron lugar en algunas presentaciones en la comuna de San Bernardo.
                                    Comienzan a grabar su primer EP el mismo año junto a Marcelo Donoso, y en el transcurso cambian su nombre para definirse como "Rieles". Con este, lanzarán lo que llamaron "Sonidos al azar" EP, cuenta con 5 temas, de temática introspectiva.
                                    Los miembros de la banda son Julissa Olivares en las voces, Ivan Avilés y Juan Pablo Lara en guitarras, Tomas Nahum como bajista y Joel Donoso en la batería.</h3>
                                <h2 class="paz" style="color: #12ca12">Fono</h2><h3 class="indie" style="color:orangered">09 7615 4792</h3>
                                <h2 class="paz" style="color: #12ca12">Correo</h2> <h3 class="indie" style="color:orangered">rielesbanda@gmail.com</h3>
                                <h2 class="paz" style="color: #12ca12">Sitio Venta</h2> <h3 class="indie" style="color:#e4db3f">https://rielesbanda.bandcamp.com/</h3>
                                        <a href="{{route('home')}}" class="btn  btn-primary"><i class="fa fa-chevron-left"></i> Home </a>  
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <div class="visible-xs">
    <div id="title" style="font-family: 'Akronim', cursive; color: #BE5C00;">Rieles</div>
    <h2 class="paz" style="color: #12ca12">Integrantes</h1><h3 class="indie" style="color:orangered">Voz: Julissa Olivares / Guitarras Ivan Avilés-Juan Pablo Lara / Bajo: Tomas Nahum / Batería: Joel Donoso</h3>
        <h2 class="paz" style="color: #12ca12">Ciudad origen</h2> <h3 class="indie" style="color:orangered">Santiago de Chile</h3>
        <h2 class="paz" style="color: #12ca12">Biografia</h2> <h3 class="indie" style="color:orangered">Banda de Rockpop Alternativo. Cuenta con 5 integrantes, se forma en Santiago de Chile a mediados del año 2013 como "Numbed" nombre con el cual tuvieron lugar en algunas presentaciones en la comuna de San Bernardo.
            Comienzan a grabar su primer EP el mismo año junto a Marcelo Donoso, y en el transcurso cambian su nombre para definirse como "Rieles". Con este, lanzarán lo que llamaron "Sonidos al azar" EP, cuenta con 5 temas, de temática introspectiva.
            Los miembros de la banda son Julissa Olivares en las voces, Ivan Avilés y Juan Pablo Lara en guitarras, Tomas Nahum como bajista y Joel Donoso en la batería.</h3>
        <h2 class="paz" style="color: #12ca12">Fono</h2><h3 class="indie" style="color:orangered">09 7615 4792</h3>
        <h2 class="paz" style="color: #12ca12">Correo</h2> <h3 class="indie" style="color:orangered">rielesbanda@gmail.com</h3>
        <h2 class="paz" style="color: #12ca12">Sitio Venta</h2> <h3 class="indie" style="color:#e4db3f">https://rielesbanda.bandcamp.com/</h3>
        <a href="{{route('home')}}" class="btn  btn-primary"><i class="fa fa-chevron-left"></i> Home </a>
     </div>
</body>
@stop