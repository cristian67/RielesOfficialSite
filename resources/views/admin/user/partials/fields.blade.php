<div class="form-group">
    {!! Form::label('',   'Nombe:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','placeholder'=>'Ingresar nombre'])!!}
</div>
<div class="form-group">
    {!! Form::label('username', 'Nick-name:')!!}
    {!! Form::text('username',  null, ['class' => 'form-control','placeholder'=>'Ingresar usuario ej: cristian67'])!!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Email:')!!}
    {!! Form::text('email',  null, ['class' => 'form-control','placeholder'=>'Ingresar e-mail'])!!}
</div>
<div class="form-group">
    {!!  Form::label('password', 'Contraseña') !!}
    {!! Form::password('password', ['class' => 'form-control','placeholder'=>'Ingresar contraseña']) !!}
</div>