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
		<div class="visible-lg visible-md ">
			<section class="blur">@include('template.partials.background')</section>
		</div>
		
			<section class="blur">@include('template.partials.background2')</section>
	</header>
	@endif
	<hr id="hi">
	<p>
	<hd>
<!--Contenido del post-->
	<body  name="anclaje">
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

			<div class="row-fluid visible-xs">
              <div class="container">
            	<div align="center">
                	<div class="col-xs-12">
                    	<div id="fb-root visible-lg">
		                <div class="fb-page" data-href="https://www.facebook.com/RielesBanda/"  data-tabs="timeline,events" data-width="490" data-height="740" 
		                data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
		                <blockquote cite="https://www.facebook.com/RielesBanda/" class="fb-xfbml-parse-ignore">
		                <a href="https://www.facebook.com/RielesBanda/">Rieles Banda</a></blockquote></div>
		            	</div>
                	</div>
            	</div>
               </div>
            </div>  	
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
		<div class="visible-lg visible-md visible-sm">
			<section style="background: black">
		     <div class="container">
				 <div class="col-xs-12">
					 <h6 style="font-family: 'Poiret One', cursive"><a href="#">@RielesBanda</a></h6>
					 <div align="center" class="embed-container center-block">
						<iframe height="370" src="https://www.youtube.com/embed/BVKKDLln0lM" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					 </div>
				 </div>
			 </div>
		    </section>	
	@include('template.partials.footer')
		</div>
    </body>
		<div class="visible-xs">

			@include('template.partials.Cellfooter')
		</div>
@stop