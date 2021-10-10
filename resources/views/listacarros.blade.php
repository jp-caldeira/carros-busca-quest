<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista Carro</title>
</head>
<body>
    <h1>Carros</h1>
    <div>
        @isset($dados['status'])
           @if ($dados['status'] == 'success')
               <p>Dados Cadastrados com sucesso!</p>
               <p>Novos registros criados: {{ $dados['quantidade'] }}</p>
           @else
               <p>Não foi encontrado nenhum resultado para sua pesquisa</p>
           @endif
        @endisset

    </div>
        <div>
        <p>Nova busca</p>
        @include('_form')
        </div>
    @forelse($carros as $carro)
    <div>
        <h3> {{ $carro->nome_veiculo }}</h3>
        <p>Id: {{ $carro->id }}</p>
        <p>Link: {{ $carro->link }}</p>
        <p>Ano: {{ $carro->ano }}</p>
        <p>Combustível: {{ $carro->combustivel }}</p>
        <p>Portas: {{ $carro->portas }}</p>
        <p>Quilometragem: {{ $carro->quilometragem }}</p>
        <p>Câmbio: {{ $carro->cambio }}</p>
        <p>Cor: {{ $carro->cor }}</p>
        <a href="{{ route('excluir-carro', $carro->id) }}" type='submit' onclick="return confirm('Tem certeza que deseja apagar este cadastro?')">Excluir</a>
    </div>
    @empty 
        <p>Não há carros cadastrados. Faça sua busca acima</p>        
    @endforelse
        

</body>
</html>