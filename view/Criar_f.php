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
        <li class="active">
            <a class="nav-link" href="?classe=Funcionario&acao=criar">[Criar Funcionario]</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="?classe=Reacao&acao=allad">[Reacoes]</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">[Sair]</a>
        </li>
       
   
    </div>
</nav>
<div class="container">


<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">

<form enctype="multipart/form-data" method="post" action="./?classe=Funcionario&acao=criar">
  <div class="form-group">
    <label for="matricula">Matrícula</label>
    <input type="number" name="matricula" maxlength="4" multiple class="form-control" id="matricula" required>
  </div>
  <div class="form-group">
  <label for="email">E-mail</label>
  <input type="email" name="email"  class="form-control" id="email" required>
  </div>
    <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" name="nome"  class="form-control" id="nome" required>
  </div>
  <div class="form-group">
    <label for="sobrenome">Sobrenome</label>
    <input type="text" name="sobrenome"  class="form-control" id="sobrenome" required>
  </div>
  <div class="form-group">
    <label for="departamento">Departamento</label>
    <input type="text" name="departamento"  class="form-control" id="departamento" required>
  </div>
  <div class="form-group">
    <label for="cargo">Cargo</label>
    <input type="text" name="cargo"  class="form-control" id="cargo" required>
  </div>
  <div class="form-group">
    <label for="foto">Foto</label>
    <input type="file" name="foto"  class="form-control-file" id="foto">
  </div>
  <div class="form-group">
    <label for="senha">Senha</label>
    <input type="password" name="senha" class="form-control-file" id="senha">
  </div>
 
  <button type="submit" class="btn btn-primary">enviar</button>
</form>
    </div>
    </div>