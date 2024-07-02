<?php
$routes = [
    '/dashboard' => 'dashboard',
    '/vente/add' => 'vente/add',
    '/vente/liste' => 'vente/liste',
    '/vente' => 'vente/liste',
    '/dette/liste' => 'dette/liste',
    '/dette' => 'dette/liste',
    '/client/liste' => 'client/liste',
    '/client' => 'client/liste',
    '/paiement/add' => 'paiement/add',
    '/paiement' => 'paiement/liste',
    '/paiement/liste' => 'paiement/liste',
    '/api' => 'api',
    'login' => 'login',
];

$page = pageNameGenerate($_REQUEST, $routes);

if($page == "api"){
    require_once WEBROOT."/controller/api.controller.php";
}else if ($page == '404'){
    require_once WEBROOT."/templates/404.html.php";
} elseif ($page == 'login'){
    require_once WEBROOT."/templates/login.html.php";
}else{
//    require_once WEBROOT."/controller/cargaison.controller.php";
    require_once WEBROOT."/templates/partials/header.html.php";

    require_once WEBROOT."/templates/$page.html.php";

    require_once WEBROOT."/templates/partials/footer.html.php";
}