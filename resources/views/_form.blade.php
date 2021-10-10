    @csrf
    <form action="{{ route('capturar-carros') }}" method="get">
    <input type="text" name="termo" placeholder="Digite sua busca aqui"></input>
    <button type="submit">Pesquisa</button>
    </form>
    </div>
    <div>   