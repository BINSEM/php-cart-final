<?php $this->layout('layout', ['title' => 'Super boutique']) ?>

<div class="ui two column centered grid">
  <div class="ui twelve wide column">
    <table class="ui inverted grey celled table">
      <thead>
        <tr><th class="ui center aligned">Order</th>
          <th class="ui center aligned">Customer</th>
          <th class="ui center aligned">Amount</th>
          <th class="ui center aligned">Shipping</th>
        </tr></thead>
        <tbody>
          <?php foreach($orders as $order) : ?>
            <tr>
              <td>
                <h2 class="ui center aligned"><a href="/order/show/<?=$this->e($order->id)?>"><?=$this->e($order->id)?></a></h2>
              </td>
              <td class="ui center aligned"><?=$this->e($order->customer->first_name)?></td>
              <td class="ui center aligned"><?=$this->e($order->amount)?> &euro;</td>
              <?php if(count($order->shipped) === 1) : ?>
                <td class="ui center aligned">Yes</td>
              <?php else: ?>
                <td class="ui center aligned">No</td>
              <?php endif; ?>
            </tr>
          <?php endforeach ?>
        </tbody>
        <tfoot>
          <tr><th colspan="4">
            <div class="ui right floated pagination menu">
              <a class="icon item">
                <i class="left chevron icon"></i>
              </a>
              <a class="item">1</a>
              <a class="item">2</a>
              <a class="item">3</a>
              <a class="item">4</a>
              <a class="icon item">
                <i class="right chevron icon"></i>
              </a>
            </div>
          </th>
        </tr></tfoot>
      </table>
    </div>
  </div>