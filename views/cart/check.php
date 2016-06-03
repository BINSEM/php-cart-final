<?php $this->layout('layout', ['title' => 'Super boutique']) ?>

<div class="ui two column centered grid">
	<div class="ui column center aligned segment">
		<h2>Your Commands</h2> 
	</div>
	<div class="four column centered row">
		<div class="ui column center aligned">
			<div class="value">
				You are selected  <b><?=Cart::count()?> Products</b>
			</div>
		</div>
		<div class="column">
			<div class="value">
				Montant total : <b><?=Cart::total()?> &euro; has Payed</b>
			</div>
		</div>
	</div>
	<div class="ui column right aligned grid">
		<div class="item">
		<a href="/customer/add" class="ui green button">Order</a>
		</div>
	</div>
</div>