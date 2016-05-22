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

<!--Contenido del post-->
	<section id="posts">
		<div class="row-fluid">
			<div class="container">
				<div class="col-xs-12">
			    @foreach($posts as $p)
                        <!-- Titulos !-->
						<h3 class = "text-center" style = "font-family: 'Allerta Stencil', sans-serif; color: #fcf8e3;"> {{$p->title}} </h3>
							<!-- Imagen !-->
							<div align="center">
								<img src="{{$p->photo}}" title="{{$p->title}}" class="img-responsive ">
							</div>
						<br>
					    <!-- Info articulo !-->
					    <br>
                    <!-- Descripcion !-->
                        <div align="center">
							<h6 class="text-success">Descripción:</h6>
                            <h4 class="center-block">{{$p->description}}</h4>
                        </div>
					<!-- Video !-->
					<?php $video = $p->video ?>
					@if($video!='')
					<div class="col-xs-12  center-block">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe id="videomain" width="600" height="338" src="{{$video}}" frameborder="1" allowfullscreen></iframe>
						</div>
						</br>
					</div>
					@endif
                    <!-- Tags !-->
                               <div align="center">
                                   <h6 class="text-info"> Temas relacionados al articulo: </h6>
                               </div>
									<?php $tags = explode(',' , $p->tags); ?>
                               <div align="center">
									@foreach($tags as $t)
										<a href="tag/{{$t}}"><label class="label label-primary">#{{$t}}</label></a>
									@endforeach
										<br>
										<!-- Fecha !-->
										<label class="label label-warning"><i class="glyphicon glyphicon-calendar"> {{$p->created_at}}</i></label>
										<br>
										<br>
										<a href='articulos/{{$p->slug}}' class="btn btn-info">Leer más</a>
								</div>
							<br>
                            <hr color="red">
					    </div>
					<!--Fin del Cuerpo-->
			    @endforeach
			</div>
			<div class="container" align="center">
				{!! $posts->render()!!}
			</div>
		</div>
	</section>
	@include('template.partials.footer')
@stop