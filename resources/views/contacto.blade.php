@extends('template.main')
@section('title'){{'Bienvenido'}}@endsection
@section('content')
    @include('template.partials.main-nav')
<section class="blur">  
    <div class="row-fluid" style="min-height: 50vh; background-size: cover; background-position: center; background-attachment: fixed">
            <div id="artitle" class="croisant">
                <h1 class="croisant">Mail <span style= "color: orangered;">Rieles</span></h1>
            </div>
    </div>
</section>  
<body style="background:#c85904;>
    <div class="contact-content">
        @if(Session::has('message'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{Session::get('message')}}
            </div>
        @endif
        <div class="main-contact">
            <div class="contact-form">
                    {!!Form::open(['route'=>'mail.store','method'=>'POST'])!!}
                <div class="col-md-6 contact-left">
                    {!!Form::text('name',null,['placeholder' => 'Nombre'])!!}
                    {!!Form::text('email',null,['placeholder' => 'Email'])!!}
                </div>
                <div class="col-md-6 contact-right">
                    {!!Form::textarea('mensaje',null,['placeholder' => 'Mensaje'])!!}
                </div>
                <div align="center">{!!Form::submit('Enviar')!!}</div>
                {!!Form::close()!!}
            </div>
            <p>
        </div>
    </div>
    <a href="{{route('home')}}" class="btn  btn-primary center-block"><i class="fa fa-chevron-left"></i> Home </a>
</body>
    <div class="visible-lg visible-md visible-sm">
        @include('template.partials.footer')
    </div>
    <div class="visible-xs">
        @include('template.partials.Cellfooter')
    </div>
@stop