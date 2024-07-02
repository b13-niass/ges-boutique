<?php 

function pageNameGenerate(array $request,array $pages){
    $uri = "login";
    $result = "";

    if (isset($request['page']) && !empty($request['page'])){
        if($request['page'] != "/"){
            $resource = explode('/', $request['page']);
            if (count($resource) == 3){
                $uri = "/".$resource[1]."/".$resource[2];
            }else if(count($resource) == 2){
                $uri = "/".$resource[1];
            }
        }
    }
    if(array_key_exists($uri, $pages)){
        $result= $pages[$uri];
    }else{
        $result = "404";
    }
    return $result;
}

function vdp($data){
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

function dd($data){
    echo "<pre >";
    var_dump($data);
    echo "</pre>";
    die();
}