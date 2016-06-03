<?php $this->layout('layout', ['title' => 'Super boutique']) ?>

<div class="ui two twelve wide column centered grid">
	<div class="four column centered row">
		<div class="ui six wide column">
			<div class="ui card">
				<div class="content">
					<div class="header">Order <b><?=$this->e($order->id)?> : Ordered by <?=$this->e($order->customer->first_name)?></b></div>
				</div>
				<div class="content">
					<h4 class="ui sub header">Shipping Details</h4>
					<div class="ui small feed">
						<div class="event">
							<div class="content">
								<div class="summary">
									<a><b><?=$this->e($order->customer->first_name)?>  <?=$this->e($order->customer->last_name)?></b></a>
								</div>
							</div>
						</div>
						<div class="event">
							<div class="content">
								<div class="summary">
									<a>Address : </a> <b><?=$this->e($order->customer->address)?></b>
								</div>
							</div>
						</div>
						<div class="event">
							<div class="content">
								<div class="summary">
									<a>Postcode : </a> <b><?=$this->e($order->customer->postcode)?></b>
								</div>
							</div>
						</div>
						<div class="event">
							<div class="content">
								<div class="summary">
									<a>Phone : </a> <b><?=$this->e($order->customer->phone)?></b>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="extra content">
					<p class="ui right aligned">Total : <b><?=$this->e($order->amount)?> &euro;</b></p>
				</div>
				<div class="extra content">
				<?php if(count($order->shipped) === 1) : ?>
					<p>Order Shipped</p>
				<?php else: ?>
					<a href="/shipping/<?=$this->e($order->id)?>" class="ui button">Shipping</a>
              <?php endif; ?>
				</div>
			</div>
		</div>
		<div class="ui six wide column">
			<div class="column">
				<table class="ui table compact">

					<?php foreach($order->products as $product) : ?>

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
</div>