<style type="text/css">

    .accordion-container{
}
position: relative;
width: 500px;
height: auto;
margin: 20px auto;
}
.accordion-container > h2{
text-align: center;
color: #fff;
padding-bottom: 5px;
margin-bottom: 30px;
border-bottom: 1px solid #ddd;
}
.set{
position: relative;
width: 100%;
height: auto;
background-color: #f5f5f5;
}
.set > a{
display: block;
padding: 10px 15px;
text-decoration: none;
color: #555;
font-weight: 600;
border-bottom: 1px solid #ddd;
-webkit-transition:all 0.2s linear;
-moz-transition:all 0.2s linear;
transition:all 0.2s linear;
}
.set > a i{
position:relative;
float: right;
margin-top:4px;
color: #666;
}
.set > a.active{
background-color:#3399cc;
color: #fff;
}
.set > a.active i{
color: #fff;
}
.content{
position:relative;
width: 100%;
height: auto;
background-color: #fff;
border-bottom: 1px solid #ddd;
display:none;
}
.content p{
padding: 10px 15px;
margin: 0;
color: #333;
}
</style>
<body>
@foreach($songs as $p)
<div class="embed-container">
        {!!$p->ruta!!}
</div>
    <div class="accordion-container">
        <h2></h2>
        <div class="set">
            <a href="#">
            Lyrics: <font color="#ff4500">{!! $p->title !!}</font><font color="#228b22">${!! $p->cash !!}.0 USD</font>
            <i class="fa fa-plus"></i>
            </a>
            <div class="content">
                <p>{!! $p->lyrics !!}</p>
            </div>
        </div>
    </div>
@endforeach
<br>
<a href="{{route('home')}}" class="btn  btn-primary center-block"><i class="fa fa-chevron-left"></i> Home </a>
</body>