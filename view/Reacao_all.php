<?php include 'inc/header.php';

 
?>

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
            <td><?=date("d/m/Y",strtotime($reacao->data))?></td>
            <td><?=$reacao->tipo?></td>
            <td><?=$reacao->comentario?></td>
            <td><img style="width:40px;height:40px" src="inc/fotos/<?=$reacao->foto_colaborador?>" alt="Funcionario"></td>

        </tr>
    <?php } ?>
</table>

<?php include 'inc/footer.php'; ?>




