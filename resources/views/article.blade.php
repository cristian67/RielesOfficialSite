@extends('template.main')
@section('title'){{$post->title . '| Rieles'  }}@endsection
@section('content')
    @include('template.partials.main-nav')
    <div class="row-fluid" style="background-image: url('{{$post->photo}}'); min-height: 50vh; background-size: cover; background-position: center; background-attachment: fixed">
        <div class="blur">
            <div id="artitle" class="croisant">
                {{$post->title}}
            </div>
        </div>
    </div>

    <div class="row-fluid">
        <div class="container">
            <div class="col-md-2"></div>
            <div class="col-md-8" align="center">
                <br>
                    <?php
                    $tags = explode(',', $post->tags);
                    ?>
                    @foreach($tags as $t)
                        <a href="../tag/{{$t}}" class="tl"><label class="label label-success">#{{$t}}</label></a>
                    @endforeach
                    <br>
                    <hr>
                    <div align="justify">
                        {!! $post->content !!}
                        <hr>
                        <br>
                        <br>
                    </div>
                    <?php $video = $post->video ?>
                    @if($video!='')
                    <div class="col-xs-10 col-xs-push-1 center-block">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="600" height="338" src="{{$post->video}}" frameborder="1" allowfullscreen></iframe>
                         </div>
                        </br>
                    </div>
                    @endif
                <!-- inicio comments.-->
                    <div class="fb-comments" data-colorscheme="dark" data-href="http://localhost/blog/public/articulos/{{$post->slug}}" data-width="100%" data-numposts="10"></div>
                    <!-- Fin -->
                    <a href="{{route('home')}}" class="btn  btn-primary"><i class="fa fa-chevron-left"></i> Home </a>
                    <br>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
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