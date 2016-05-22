
@if($errors->any())
    <div class="alert alert-danger" role="alert">
    <p>Por FAVOR corrige estos errores:</p>
    <ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
    </div>
@endif
