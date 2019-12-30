<?php
//on sépare les paramètres
$params=explode('/',$_GET['p']);
var_dump($params);

//est ce qu'un paramètre existe

if($params[0]!=''){
    $controller=ucfirst($params[0]);
    echo $controller;
}else {
    
}