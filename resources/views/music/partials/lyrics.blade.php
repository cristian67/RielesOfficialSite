@foreach($songs as $p)
<div class="embed-container">
        {!!$p->ruta!!}
</div>
<div class="container-fluid">
    <div class="accordion-container">
        <div class="set">
            <a href="#">
                Lyrics: <font color="#ff4500">{!! $p->title !!}</font>    <font color="#228b22">${!! $p->cash !!}.0 USD</font>
                <i class="fa fa-plus"></i>
            </a>
            <div class="content text-center">
                <p>
                    {!! $p->lyrics !!}
                </p>
            </div>
        </div>
    </div>
    <br>
</div>
@endforeach