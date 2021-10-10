<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Http\Controllers\ConnectdbController;
use Illuminate\Http\Request;
use PDO;

class UsuarioController extends Controller
{
    public function exibirUsuarios()
    {
        $db = $this->connectDB();

        $query = $db->prepare('SELECT * FROM `usuarios`');
        $query->execute();
        $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

        return $usuarios;
        
    }

    public function connectDB()
    {
        $host = "mysql:host=" . env('DB_HOST') .";dbname=" . env('DB_DATABASE');
        $db = new PDO($host, env('DB_USERNAME'), env('DB_PASSWORD'));

        return $db;
    }

}
