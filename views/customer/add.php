<?php $this->layout('layout', ['title' => 'Super boutique']) ?>

<div class="ui two column centered grid">
  <div class="ui ten wide column center aligned segment">
    <h1 class="ui header">Put Your Identification</h1>
    <form method="post" class="ui form" action="/customer/post">
      <div class="field">
        <input type="text" name="first_name" placeholder="First-name">
      </div>
      <div class="field">
        <input type="text" name="last_name" placeholder="Last-name">
      </div>
      <div class="field">
        <input type="text" name="address" placeholder="Address">
      </div>
      <div class="field">
        <input type="text" name="postcode" placeholder="Postcode">
      </div>
      <div class="field">
        <input type="text" name="phone" placeholder="Phone">
      </div>
      <button class="ui primary button">Continue</button>
    </form>
  </div>
</div>