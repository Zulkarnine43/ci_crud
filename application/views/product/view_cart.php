

<?php foreach ($this->cart->contents() as $items) { ?>

  <table border="1px">
  	<thead>
  		<th>ID</th>
  		<th>NAME</th>
  		<th>QTY</th>
  		<th>PRICE</th>
  		<th>TOTAL</th>
  		<th>ACTION</th>
  	</thead>

  	<tbody>
  <td><?php echo $items['id']; ?></td>
  <td><?php echo $items['name']; ?></td>
  <td><?php echo $items['qty']; ?></td>
  <td><?php echo $items['price']; ?></td>
  <td><?php echo $items['qty'] * $items['price']; ?></td>
   <td><a href="<?php echo base_url() ?>update_cart/<?php echo $items['rowid'];?>">Update</a>
       <a href="<?php echo base_url() ?>cancel_cart/<?php echo $items['rowid'];?>">Cancel</a>
   </td>
  

  	</tbody>

  </table>

<?php } ?>
