<h1>Customer</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Class</th> 
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($customer = $customers-> fetch_assoc()) {
?>
  <tr>
    <td><?php echo $customer['customer_id']; ?></td>
    <td><?php echo $customer['customer_name']; ?></td>
    <td><?php echo $customer['customer_city']; ?></td>
    <td><?php echo $customer['customer_phone']; ?></td>
    <td><a href="products-purchased-customer.php?id=<?php echo $customer['customer_id']; ?>">Classes</a></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
