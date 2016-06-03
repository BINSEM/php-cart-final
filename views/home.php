<?php $this->layout('layout', ['title' => 'Super boutique']) ?>

<div class="ui container">
	<h1 class="ui header">My Super Products</h1>
	<hr class="ui divider">
	<section class="ui three stackable cards">
		<!-- boucle des produits ui card -->
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
				<div class="extra content">
					<span>
						<a><i class="info icon"></i>More</a>
					</span>
					<span class="right floated">
						<form action="/cart/add" method="post">
							<input type="hidden" name="product" value="<?=$this->e($product->id)?>" />
							<button class="ui button">Add to cart</button>
						</form>
					</span>
				</div>
			</div>

		<?php endforeach ?>
	</section>
</div>