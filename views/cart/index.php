<?php $this->layout('layout', ['title' => 'Super boutique']) ?>

<div class="ui container">
	<div class="ui grid two columns">
		<div class="column">
			<h1 class="ui container">Mon Panier</h1>
			<div class="ui list">
				<div class="item">
					<a href="/cart/checkout" class="ui button">Finaliser ma commande</a>
				</div>
				<h4 class="item header">Montant total : <?=Cart::total()?> &euro;</h4>
				<h4 classs="item header">Nombre produits : <?=Cart::count()?></h4>
			</div>
		</div>
		<div class="column">
			<table class="ui table compact">
				<!-- une boucle ! -->
				<?php foreach($products as $product) : ?>

					<div class="ui card">
						<div class="image">
							<img src="<?=$this->e($product->picture)?>">
						</div>
						<div class="content">
							<a class="header"><?=$this->e($product->name)?></a>
							<div class="description">
								<?=$this->e($product->price)?> &euro;
							</div>
						</div>
					</div>

				<?php endforeach ?>

			</table>
		</div>
	</div>


</div>