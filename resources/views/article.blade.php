@extends('template.main')
@section('title'){{$post->title . '| Rieles'  }}@endsection
@section('content')
    <style>
        #fbcomments,
        .fb-comments,
        .fb-comments iframe[style],
        .fb-comments span {
            width: 100% !important;
        }
    }
    </style>

<section class = "blur visible-lg visible-md visible-sm">
    <div class="row-fluid " style="background-image: url('{{$post->photo}}'); min-height: 50vh; background-size: cover; background-position: center; background-attachment: fixed">
            <div id="artitle" class="croisant">
                {{$post->title}}
            </div>
    </div>
</section>
<section class="blur visible-xs">
    <div class="row-fluid" style=" min-height: 50vh; background-size: cover; background-position: center; background-attachment: fixed">
            <div id="artitle" class="croisant">
               <h1 class="croisant">{{$post->title}} <span style= "color: orangered;">Rieles</span></h1>
            </div>
    </div>
</section>

<body>
    <div class="row-fluid">
        <div class="container">
            <div class="col-xs-12" align="center">
                <br>
                @foreach($post->tags as $p)
                   <?php $tags = explode(',' , $p->tags); ?>
                            @foreach($tags as $t)
                                <a href="/tag/{{$t}}"><label class="label label-primary">#{{$t}}</label></a>
                            @endforeach
                @endforeach
                    <br>
                    <hr>
                    <div  class="letras" align="justify">
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
             <div id="fb-root">
                    <div class="fb-comments" data-colorscheme="dark" 
                    data-href="http://rielesbanda.com/articulos/{{$post->slug}}" 
                    data-width="100%" 
                    data-numposts="10"></div>
             </div>
                    <!-- Fin -->
                    <a href="{{route('home')}}" class="btn  btn-primary center-block"><i class="fa fa-chevron-left"></i> Home </a>
                    <br>
            </div>
        </div>
    </div>
</body>
    <br>


    <div class="visible-lg visible-md visible-sm">
        @include('template.partials.footer')
    </div>
    <div class="visible-xs">
        @include('template.partials.Cellfooter')
    </div>
<!-- Zona de comentarios -->
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.5";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
@stop