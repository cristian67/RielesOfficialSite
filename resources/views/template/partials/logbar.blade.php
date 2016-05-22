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
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <p class="navbar-text">
                    <i class="fa fa-dashboard"></i> Admin Panel
                </p>
                <li><a href="#">Editar Videos</a></li>
            </ul>
            <!-- Contenido de la Barra Derecha -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="fa fa-sing-out"></i> <font color = "#ff8f03" >#</font></a></li>
                <li><a href="{{route('home.posts.create')}}"><font color = "#227c34" ><i class="fa fa-plus"></i> Crear entrada</a></li></font>
            </ul>
        </div>
    </div>
</nav>