<div class="container text-center">
    <div id="posts">
        @foreach($posts as $p)
            <div class="post white-panel">
                <h3 style="font-family: 'Lobster Two', cursive;">{{$p->title}}</h3><hr>
                <img src ='{{$p->photo}}' width="200">
                <div class="post panel-info">
                    <p>{{$p->description}}</p>
                    <p>
                        <a href="#"><label class="label label-primary">#{{$p->tag->tags}}</label></a>
                        <p>
                        <a href='#' class="btn btn-info">Leer más</a>
                        <p>
                        <label class="label label-warning"><i class="glyphicon glyphicon-calendar">Creado: {{$p->created_at}}</i></label>
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</div>