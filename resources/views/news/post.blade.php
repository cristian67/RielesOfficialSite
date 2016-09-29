<div class="container text-center" >
    <section class="section" id="posts">
        @foreach($posts as $p)
            <div class="post white-panel">
                <h3 style="font-family: 'Akronim', cursive; font-size: 1.7em;">{{$p->title}}</h3><hr>
                <img class="photo" src ='{{$p->photo}}' width="200">
                <div class="post panel-info">
                    <p style="font-family: 'Covered By Your Grace', cursive; text-align: center;  font-size: 1.3em;">{{$p->description}}</p>
                    @if($p->tags != '')
                    <p>
                        <?php $tags = explode(',' , $p->tags); ?>
                            @foreach($tags as $t)
                                <a href="tag/{{$t}}"><label class="label label-primary">#{{$t}}</label></a>
                            @endforeach
                    <p>
                    @endif
                    <div class="visible-lg visible-md visible-sm" align="center"><a href='articulos/{{$p->slug}}' class="btn btn-info center-block">Leer más</a></div>
                    <div class="visible-xs" align="center"><a href='articulos/{{$p->slug}}' class="btn btn-info">Leer más</a></div>
                    <hr>
                        <label class="label label-warning"><i class="glyphicon glyphicon-calendar">{{$p->created_at}}</i></label>
                    </p>
                </div>
            </div>
        @endforeach
    </section>
</div>