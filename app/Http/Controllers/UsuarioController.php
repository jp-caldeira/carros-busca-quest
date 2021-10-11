<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use PDO;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function connectDB()
    {
        $host = "mysql:host=" . env('DB_HOST') .";dbname=" . env('DB_DATABASE');
        $db = new PDO($host, env('DB_USERNAME'), env('DB_PASSWORD'));

        return $db;
    }

    public function exibirUsuarios()
    {
        $db = $this->connectDB();

        $query = $db->prepare('SELECT * FROM `users`');
        $query->execute();
        $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

        return $usuarios;
        
    }

    public function auth(Request $request)
    {
         $this->validate($request, 
        [
        "email" => 'required',
        'password'=> 'required'
        ],
       [
        "email.required" => "Email não pode ser vazio",
        "password.required" => "Senha é obrigatório"
        ]);
        

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('capturar-carros');
        } else {           
            return view('login', [ 
                "mensagem" => "Email ou senha incorretos",
             ]);
        }
    }

}
