@extends('template.main')
    @section('content')
        @include('template.partials.main-nav')

        <section class="blur blur" >
        <div class="row-fluid background2 center-block" style=" min-height: 50vh; background-size: cover; background-position: center; background-attachment: fixed">
                <div id="artitle" class="croisant">
                    <font color="#ff4500">Rieles </font> Music
                </div>
        </div>
        </section>
        <body>
         @include("music.partials.lyrics")
        </body>
        <a href="{{route('home')}}" class="btn  btn-primary center-block"><i class="fa fa-chevron-left"></i> Home </a>
    @endsection
    <div class="visible-lg visible-md visible-sm">
        @include('template.partials.footer')
    </div>
    <div class="visible-xs">
        @include('template.partials.Cellfooter')
    </div>
@stop