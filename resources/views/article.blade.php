@extends('template.main')
@section('title'){{$post->title . '| Rieles'  }}@endsection
@section('content')
    @include('template.partials.main-nav')
    <style>
        #fbcomments,
        .fb-comments,
        .fb-comments iframe[style],
        .fb-comments span {
            width: 100% !important;
        }</style>


    <div class="row-fluid" style="background-image: url('{{$post->photo}}'); min-height: 50vh; background-size: cover; background-position: center; background-attachment: fixed">
        <div class="blur">
            <div id="artitle" class="croisant">
                {{$post->title}}
            </div>
        </div>
    </div>

<body class="fondo3">
    <div class="row-fluid">
        <div class="container">
            <div class="col-md-2"></div>
            <div class="col-md-8" align="center">
                <br>
                @foreach($post->tags as $t)
                    <a href="/tag/{{$t->tags}}"><label class="label label-primary">#{{$t->tags}}</label></a>
                @endforeach
                    <br>
                    <hr>
                    <div align="justify">
                        {!! $post->content !!}
                        <hr>
                        <br>
                        <br>
                    </div>
            </div>
        </div>
    </div>
                <!-- inicio comments.-->
    <div class="container">
        <div class="col-xs-12">
            <div align="center">
                    <div class="fb-comments" data-colorscheme="light" data-href="http://localhost/blog/public/articulos/{{$post->slug}}" data-width="100%" data-numposts="10"></div>
                    <!-- Fin -->
                    <a href="{{route('home')}}" class="btn  btn-primary center-block"><i class="fa fa-chevron-left"></i> Home </a>
                    <br>
                    </div>
            </div>
        </div>
    </div>
</body>
    <br>
<!-- Zona de comentarios -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.5";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    @include('template.partials.footer')
@stop