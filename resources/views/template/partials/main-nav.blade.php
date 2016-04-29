<nav class="navbar navbar-default hide" id="navi">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand croisant alert-danger" href={{route('home')}}>Rieles</a></p>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Nosotros<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="biografia.php">Biografia</a></li>
                        <li class="divider"></li>
                        <li><a href="contacto.php">Conctacto</a></li>
                    </ul>
                </li>
                <li><a href="index.php#anclaje">Noticias</a></li>
                <li><a href="discografia.php">Discografia</a></li>
                <li><a href="{{route('videos')}}" >Videos</a></li>
                <li><a href="galleria.php">Galleria</a></li>
                <li><a href="store.php">Store</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://www.facebook.com/Rieles-Banda-839224162828964/"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                <li><a href="https://twitter.com/RielesBanda"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCf2bOE5oxxHdPVgfR5t9yew"><i class="fa fa-youtube-play fa-2x"></i></a></li>
                <li><a href="contacto.php"><i class="fa fa-envelope-o fa-2x"></i></a></li>
                <li><a href="https://soundcloud.com/rielesbanda"><i class="fa fa-soundcloud fa-2x"></i></a></li>
            </ul>
        </div>
    </div>
</nav>