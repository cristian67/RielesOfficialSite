<style>
    .navbar {
        background:#101e1e;
    }
    .dropdown-menu{
        background:#5ba471;
    }
</style>
<nav class="navbar navbar-inverse ">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Route Home-->
            <font color = "#ff8f03" ><a class="navbar-brand croisant" href="">Rieles</a></font>
        </div>
            <!-- Contenido de la Barra Izquierda-->
        <div class="collapse navbar-collapse"id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Agregar<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{route('home.albums.create')}}"><font color = "#006400" ><i class="fa fa-plus"></i> Add Album</a></li></font>
                        <li class="divider"></li>
                        <li><a href="{{route('home.songs.create')}}"><font color = "#006400" ><i class="fa fa-plus"></i> Add Song</a></li></font>
                        <li class="divider"></li>
                        <li><a href="{{route('home.multimedias.create')}}"><font color = "#006400" ><i class="fa fa-plus"></i> Add Multimedia</a></li></font>
                        <li class="divider"></li>
                        <li><a href="{{route('home.galerias.create')}}"><font color = "#006400" ><i class="fa fa-plus"></i> Add Galeria</a></li></font>
                    </ul>
                </li>
                <p class="navbar-text">
                    <a href="{{route('home.posts.index')}}" ><i class="fa fa-dashboard" style="color: orangered"> Admin Panel</a></i>
                </p>
                <p class="navbar-text">
                    <a href="{{route('home.songs.index')}}" ><i class="fa fa-music" style="color: "> Music Panel</a></i>
                </p>
                <p class="navbar-text">
                    <a href="{{route('home.albums.index')}}" ><i class="fa fa-music" style="color: "> Album Panel</a></i>
                </p>
                <p class="navbar-text">
                    <a href="{{route('home.galerias.index')}}" ><i class="fa fa-camera" style="color: darkred"> Galleria Panel</a></i>
                </p>
                <p class="navbar-text">
                    <a href="{{route('home.multimedias.index')}}" ><i class="fa fa-camera-retro" style="color: darkred"> Imagenes Panel</a></i>
                </p>
            </ul>
            <!-- Contenido de la Barra Derecha -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="fa fa-sing-out"><font color = "#ff8f" ></font></a></i></li>
                <li><a href="{{route('home.posts.create')}}"><font color = "green" ><i class="fa fa-plus"></i> Crear entrada</a></li></font>
            </ul>
        </div>
    </div>
</nav>