<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Services\EstoqueQuest;
use Illuminate\Http\Request;

class CarroController extends Controller
{

    protected EstoqueQuest $estoqueQuest;

    public function __construct(
        EstoqueQuest $estoqueQuest
    )
    {
        $this->estoqueQuest = $estoqueQuest;
    }

    public function index()
    {
        return view('index');
    }

    public function listar()
    {
        $carros = Carro::get();

        return view('listacarros', [
            "carros" => $carros,
        ]);
    }

    public function capturar(Request $request){

        if(!is_null($request->termo)){
        
            $dados = $this->estoqueQuest->buscar($request->termo);

            $carros = Carro::get();

            return view('listacarros', [ 
                "dados" => $dados,
                "carros" => $carros
             ]);

        } else {

            return redirect()->route('index');

        }
    }


    public function excluir(int $id)
    {
        $carro = Carro::findOrFail($id);
        
        $carro->delete();

        return redirect()->route('lista-carros');
    }
}
