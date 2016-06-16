@extends('template.main')
    @section('content')
        @include('template.partials.main-nav')

        <section class="blur blur" >
        <div class="row-fluid background2 center-block" style="background-image: url(''); min-height: 50vh; background-size: cover; background-position: center; background-attachment: fixed">
                <div id="artitle" class="croisant">
                    <font color="#ff4500">Rieles </font> Music
                </div>
        </div>
        </section>
        <body class="fondo">
         @include("music.partials.lyrics")
        </body>
        @include('template.partials.footer')
@endsection
@stop