<?php include 'inc/header.php'; 

?>
	
			<h1>Top 3</h1>
			
			<div class="row">
			<?php
			$i=0;
			foreach( $leaderboard AS $top3 ) if ($i < 3){ ?>
				<div class="col-sm-4">
					<div class="leaderboard-card leaderboard-card--first">
						<div class="leaderboard-card__top">
							<h3 class="text-center"><?=$top3->cont_reacao?> Reações</h3>
						</div>
						<div class="leaderboard-card__body">
							<div class="text-center">
								<img src="inc/fotos/<?=$top3->foto_colaborador?>" class="circle-img mb-2" >
								<h5 class="mb-0"><?=$top3->nome?></h5>
								<p class="text-muted mb-0"><?=$top3->email?></p>
								<hr>
								<div class="d-flex justify-content-between align-items-center">
									<span><i class="fa fa-suitcase"></i> <?=$top3->cargo?></span>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			
				<?php $i +=1; } ?>


			</div>

<br>
			<h4>Top 5</h4>

			<table class="table">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Reações</th>
						<th>Cargo</th>
						<th>Departamento</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach( $leaderboard AS $melhores ){ ?>
					<tr>
						<td>
							<div class="d-flex align-items-center">
								<img src="inc/fotos/<?=$melhores->foto_colaborador?>" class="circle-img circle-img--small mr-2" >
								<div class="user-info__basic">
									<h5 class="mb-0"><?=$melhores->nome?></h5>
									
								</div>
							</div>
						</td>
						<td>
							<div class="d-flex align-items-baseline">
								<h4 class="mr-1"><?=$melhores->cont_reacao?></h4><small class="text-success"><i class="fa fa-arrow-up"></i></small>
							</div>
						</td>
						<td><?=$melhores->cargo?></td>
						<td><?=$melhores->departamento?></td>
						<td>
						<?=$melhores->email?>
						</td>
					</tr>
					<?php } ?>
					
				</tbody>
			</table>
	
	
	<?php include 'inc/footer.php'; ?>