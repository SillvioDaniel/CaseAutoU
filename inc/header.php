<?php

if(isset($_SESSION['nome'])){
    $nome = $_SESSION['nome'];
    $matricula = $_SESSION['usuario'];
    }else{
        header("Location:./index.php");
    }
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <title>AutoU</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="inc/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
<div class="container-fluid">


      <a class="navbar-brand" href="#">AUTOU</a>
   
    <!-- Links -->
    <ul class="navbar-nav">
        <li >
            <a class="nav-link" href="?classe=Reacao&acao=all">[Ver Posts]</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="?classe=Reacao&acao=leaderboard">[Leaderboard]</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="?classe=Reacao&acao=Reagir">[Reagir]</a>
        </li>
        </ul>
        <ul class=" navbar-nav navbar-right">
      <li disabled class="nav-item"><a class="nav-link" href="#">OLÁ <?=$nome?></a></li>
      <li class="nav-item"><a class="nav-link" href="?classe=Funcionario&acao=Logout">SAIR</a></li>
      
        
    </ul>
    </div>
</nav>
<div class="container">