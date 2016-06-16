@extends('template.main')
@section('title'){{'Bienvenido'}}@endsection
@section('content')
	@include('template.partials.main-nav')
	<!-- Para el scroll al recarar pagina-->
	@if(isset($_GET['page']))
		<div>
			<div class="row-fluid">
				<div class="jumbotron">
					<h1 class="text-center">Rieles<br>
					<small>Noticias</small></h1>
				</div>
			</div>
		</div>
	@else
	<header>
		<section class="blur">@include('template.partials.background')</section>
	</header>
	@endif
	<hr id="hi">
	<p>
	<hd>
<!--Contenido del post-->
	<body class="fondo" name="anclaje">
		<section>
		@include("news.post")
		</section>
		<p>
		<p>
		<br>
		<br>
		<br>
	    <br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

		<section>
			<div class="container" align="center">
					{!! $posts->render()!!}
			</div>
		</section>
		<hr>
<!--Video-->
<style>
	.embed-container iframe,
	.embed-container object,
	.embed-container embed {
		position: static ;
		width: 45%;
	}
</style>
	<section style="background: black">
     <div class="container">
		 <div class="col-xs-12">
			 <h6 style="font-family: 'Poiret One', cursive"><a href="#">@RielesBanda</a></h6>
			 <div align="center" class="embed-container center-block">
				<iframe height="370" src="https://www.youtube.com/embed/S7DVADCjN_w" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			 </div>
		 </div>
	 </div>
	</section>
	</body>
	@include('template.partials.footer')
@stop