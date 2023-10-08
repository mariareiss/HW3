<h1>Products</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Number</th>
      <th>Description</th> 
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($product = $Products-> fetch_assoc()) {
?>
  <tr>
    <td><?php echo $product['product_id']; ?></td>
    <td><?php echo $product['product_name']; ?></td>
    <td><?php echo $product['product_price']; ?></td>
    <td>
       <form method="post" action="order-by-product.php">
         <input type="hidden" name="sid" value="<?php echo $product['product_id']; ?>">
         <button type="submit" class="btn btn-primary">Sections</button>
       </form>  
    </td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
