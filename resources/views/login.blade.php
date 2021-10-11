<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>  
</head>

<body>    
    <div class="container mt-4">
        @isset($mensagem)
            <div class="alert alert-danger">{{ $mensagem }}</div>
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
     <form class="form-control mt-5" method="POST" action="{{ route('user-auth') }}">    
     @csrf         
     @method('POST')
        <h1 class="display">Login</h1>
        <input class="form-control mt-1" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Digite seu email">  
        <input class="form-control mt-1" id="password" type="password" name="password" placeholder="Digite sua senha">
        <button class="btn btn-dark mt-1" type="submit">Entrar</button>
    </div>   
    </form> 



</body>
</html>
