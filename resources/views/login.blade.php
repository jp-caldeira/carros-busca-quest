<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>  
</head>

<body>    
    <div>
        @isset($mensagem)
            <p>{{ $mensagem }}</p>
        @endisset
        @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
     <form method="POST" action="{{ route('user-auth') }}">    
     @csrf         
     @method('POST')
        <h1>Login</h1>
        <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Digite seu email">  
        <input id="password" type="password" name="password" placeholder="Digite sua senha">
        <button type="submit">Entrar</button>
    </div>   
    </form> 



</body>
</html>
