@extends('template.main')
@section('title'){{'Larablog'}}@endsection
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
		<div class="blur">
			<div id="title" style="font-family: 'Akronim', cursive; color: #BE5C00;">Rieles<div>
			<div id="subtitle" class="croisant"><h3>Sitio Official</h3></div>
			<div align="center">
				<a onclick="$('#posts').animatescroll({scrollSpeed:2000, easing:'easeInOutBounce'});" style= "font-family: 'Allerta Stencil', sans-serif;" class="btn btn-web btn-lg">Desplegar</a>
			</div>
		</div>
	</header>
	@endif
	<hr>
<!--Contenido del post-->
	<body class="fondo">
		@include("news.post")
		<p>
		<p>
		<div class="container" align="center">
				{!! $posts->render()!!}
		</div>
	</body>
	@include('template.partials.footer')
@stop