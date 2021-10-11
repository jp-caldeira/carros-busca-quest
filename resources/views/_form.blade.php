    
    @csrf
    <form class="form-control mb-3" action="{{ route('capturar-carros') }}" method="get">
    <h5 class="display">Nova busca</h5>    
    <input class="form-control" type="text" name="termo" placeholder="Digite sua busca aqui"></input>
    <button class="btn btn-dark" type="submit">Pesquisa</button>
    </form>
    