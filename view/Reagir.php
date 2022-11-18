<?php include 'inc/header.php';
/*if(isset($_SESSION)){
    
    $matricula = $_SESSION['usuario'];
    }else{
    session_start();
    $matricula = $_SESSION['usuario'];
    }*/
?>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">

<form method="post" action="./?classe=Reacao&acao=reagir">
<div class="form-group">
    <label for="matricula">Sua matricula</label>
    <input  class="form-control" id="matricula" name="matricula" placeholder=<?=$matricula?> value=<?=$matricula?> disabled >
    

 </div>

  <div class="form-group">
    <label for="id_elogiado">Para qual colega você deseja enviar uma reação:</label>
    <select  class="form-control" id="id_elogiado" name="id_elogiado" required>
    <?php foreach ($funcionarios AS $colegas){?>
            <option value="<?=$colegas->matricula?>"><?=$colegas->nome?></option>
        <?php }?>
        </select>

 </div>

 <div class="form-group">
 <label for="id_tipo">Tipo da reação</label>
 <select  class="form-control" id="id_tipo" name="id_tipo" required>
 <?php  foreach ($tipos_reacao AS $tipo){?>
            <option value="<?=$tipo->id?>"><?=$tipo->tipo?></option>
        <?php }?>
        </select>

 </div>
 

 <div class="form-group">
    <label for="comentario">Envie Seu comentário</label>
    <textarea class="form-control" required id="comentario" name="comentario" rows="4"></textarea>
  </div>
 
  <button  type="submit" name="enviar" value="enviar" class="btn btn-primary">enviar</button>
</form>
    </div>
    </div>

    <?php include 'inc/footer.php'; ?>





