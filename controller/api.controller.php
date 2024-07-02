<?php
header('Content-Type: application/json');

function queryToArray($queryString){
    $queryString = ltrim($queryString, '/api?');
    parse_str($queryString, $queryParams);
    return $queryParams;
}

function object_to_array($data)
{
    if(is_array($data) || is_object($data))
    {
        $result = array();

        foreach($data as $key => $value) {
            $result[$key] = $this->object_to_array($value);
        }

        return $result;
    }

    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "GET"){
    if (isset($_SERVER["REQUEST_URI"])){
        $data = queryToArray($_SERVER["REQUEST_URI"]);
        if (isset($data['loadpage']) && !empty($data['loadpage'])){

            if($data['loadpage'] == "vente-add"){
                $clients = (new Client())->listeOfArray();
                $categories = (new Categorie())->listeOfArray();
                $articles = (new Article())->listeOfArray();
                $unites = (new Unite())->listeOfArray();
                $article_unites = (new ArticleUnite())->listeOfArray();
                $stocks = (new Stock())->listeOfArray();

                echo json_encode([
                    "clients" => $clients,
                    "categories" => $categories,
                    "articles" => $articles,
                    "unites" => $unites,
                    "article_unites" => $article_unites,
                    "stocks" => $stocks
                ]);
            }

            if($data['loadpage'] == "dette-liste"){
                $dettes = (new Dette())->listeDettesClient();
                echo json_encode([
                    "dettes" => $dettes
                ]);
            }
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $data = json_decode(file_get_contents("php://input"), true);
    if (isset($data['formulaire']) &&!empty($data['formulaire'])){
        echo json_encode($data);
    }
}