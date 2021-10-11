<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Lista Carros</title>
</head>
<body>
    <div class="container-fluid mt-2 text-center" style='background-color:greenyellow'>
    <h1 class="display">Lista de carros</h1>
    </div>
    <div class="container">
        @isset($dados['status'])
           @if ($dados['status'] == 'success')
            <div class="alert alert-success">
               <p>Dados Cadastrados com sucesso!</p>
               <p>Novos registros criados: {{ $dados['quantidade'] }}</p>
            </div>
           @else
               <div class="alert alert-warning">Não foi encontrado nenhum resultado para sua pesquisa</div>
           @endif
        @endisset

    </div>
        <div class="container">
        @include('_form')
        </div>
    <div class="container">
        <table class="table table-striped">
        <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Veículo</th>
        <th scope="col">Ano</th>
        <th scope="col">Ano</th>
        <th scope="col">Combustível</th>
        <th scope="col">Portas</th>
        <th scope="col">Quilometragem</th>
        <th scope="col">Cor</th>
        <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @forelse($carros as $carro)
        <tr>
        <th scope="row">{{ $carro->id }}</th>
        <td><a href="{{ $carro->link  }}">{{ $carro->nome_veiculo }}</a></td>
        <td>{{ $carro->ano }}</td>
        <td>{{ $carro->combustivel }}</td>
        <td>{{ $carro->portas }}</td>
        <td>{{ $carro->quilometragem }}</td>
        <td>{{ $carro->cambio }}</td>
        <td>{{ $carro->cor }}</td>
        
        <td>
        <a href="{{ route('excluir-carro', $carro->id) }}" type='submit' onclick="return confirm('Tem certeza que deseja apagar este cadastro?')">Excluir</a>
        </td>
    </tr>
    @empty 
    <th scope="row"></th>
    <td>Não há carros cadastrados. Faça sua busca acima</td>
    <td></td>
    <td></td>
    </tr> 
    @endforelse
   </div>    

</body>
</html>