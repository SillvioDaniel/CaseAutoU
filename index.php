<?php
require_once 'inc/config.php';

$classe = isset($_GET['classe']) ? $_GET['classe'] : 'Funcionario';
$acao = isset($_GET['acao']) ? $_GET['acao'] : 'login';
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '1';

require_once 'controller/'.$classe.'Controller.php';

$controller = $classe."Controller";
$app = new $controller();
$app->$acao();

