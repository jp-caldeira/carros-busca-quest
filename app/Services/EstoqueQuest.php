<?php

namespace App\Services;

use App\Models\Carro;
use DOMDocument;
use DOMXPath;

class EstoqueQuest
{

    public function buscar(string $termo)
    {
        libxml_use_internal_errors(true);

        $url = sprintf('https://www.questmultimarcas.com.br/estoque?termo=%s', $termo);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($ch);

        curl_close($ch);
        
        $document = new DOMDocument();
        $document->loadHTML($response);

        $xPath = new DOMXPath($document);
        $elements = $xPath->query('.//div[@class="card__inner"]');

        if(count($elements) != 0){

            foreach($elements as $element) {

                $carro = [];
                $carro['user_id'] = 1;
                $carro['nome_veiculo'] = $element->getElementsByTagName('h2')[0]->textContent;
                $carro['link'] = $element->getElementsByTagName('a')[0]->getAttribute('href');
                $infos = $element->getElementsByTagName('span');
                $carro['ano'] = trim($infos[1]->textContent);
                $carro['quilometragem'] = trim($infos[3]->textContent);
                $carro['combustivel'] = trim($infos[5]->textContent);
                $carro['cambio'] = trim($infos[7]->textContent);
                $carro['portas'] = trim($infos[9]->textContent);
                $carro['cor'] = trim($infos[11]->textContent);
                
                Carro::create($carro);
                
            }

            return [
                "status" => "success",
                "quantidade" => count($elements),
            ];

        } else {
            return [
                "status" => "failed",
            ];
        }

    }



}