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

<h2>Reações</h2>


<table class="table">
    <tr>
        <th>Nome</th>
        <th>Data</th>
        <th>Tipo</th>
        <th>Comentario</th>
        <th>Foto</th>
    </tr>
    <?php foreach( $reacoes AS $reacao ){ ?>
        <tr>
            <td><?=$reacao->nome?></td>
            <td><?=$reacao->data?></td>
            <td><?=$reacao->tipo?></td>
            <td><?=$reacao->comentario?></td>
            <td><img style="width:40px;height:40px" src="inc/fotos/<?=$reacao->foto_colaborador?>" alt="Funcionario"></td>
            <td>


                <!-- Button to Open the Modal -->
                <a class="btn btn-primary"  href="?classe=Reacao&acao=apagar&id=<?=$reacao->id?>   >
                    <i class="fa fa-trash"></i> Excluir
                </a>
            </td>
        </tr>
    <?php } ?>
</table>






</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
