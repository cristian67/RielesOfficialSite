<div class="container text-center" >
    <section class="section" id="posts">
        @foreach($posts as $p)
            <div class="post white-panel">
                <h3 style="font-family: 'Lobster Two', cursive;">{{$p->title}}</h3><hr>
                <img class="photo" src ='{{$p->photo}}' width="200">
                <div class="post panel-info">
                    <p>{{$p->description}}</p>
                    @if($p->tags != '')
                    <p>
                        <?php $tags = explode(',' , $p->tags); ?>
                            @foreach($tags as $t)
                                <a href="tag/{{$t}}"><label class="label label-primary">#{{$t}}</label></a>
                            @endforeach
                    <p>
                    @endif
                    <div align="center"><a href='articulos/{{$p->slug}}' class="btn btn-info">Leer más</a></div>
                    <hr>
                        <label class="label label-warning"><i class="glyphicon glyphicon-calendar">{{$p->created_at}}</i></label>
                    </p>
                </div>
            </div>
        @endforeach
    </section>
</div>