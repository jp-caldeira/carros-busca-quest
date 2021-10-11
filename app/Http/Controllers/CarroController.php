<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Services\EstoqueQuest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarroController extends Controller
{

    protected EstoqueQuest $estoqueQuest;

    public function __construct(
        EstoqueQuest $estoqueQuest
    )
    {
        $this->estoqueQuest = $estoqueQuest;
    }

    public function listar()
    {   
        if (!Auth::check()) {        
            return redirect()->route('login');
        }

         $carros = Carro::get()->where('user_id', Auth::id());

            return view('listacarros', [
                "carros" => $carros,
            ]);

    
    }

    public function capturar(Request $request)
    {
        if (!Auth::check()) {        
            return redirect()->route('login');
        }


        if(!is_null($request->termo)){
        
            $dados = $this->estoqueQuest->buscar($request->termo);

            $carros = Carro::get();

            return view('listacarros', [ 
                "dados" => $dados,
                "carros" => $carros
             ]);

        } else {

            return redirect()->route('lista-carros');

        }
    }

    public function excluir(int $id)
    {
        if (!Auth::check()) {        
            return redirect()->route('login');
        }

        $carro = Carro::findOrFail($id);
        
        $carro->delete();

        return redirect()->route('lista-carros');
    }
}
