<div class="container">
  <?isset($message) ? $message : ""; ?>
    <a class="btn btn-success" href="/Team-8---Inventory-Management-System/products/addItem">Add item</a>
    <a class="btn btn-info" href = "/Team-8---Inventory-Management-System/products/">View Active items</a>
    <a class="btn btn-danger" href = "/Team-8---Inventory-Management-System/products/viewInactive">View inactive items</a>
  <br>
  <br>
  <table class="table table-striped table-bordered table-hover text-center">
    <thead>
      <td>Product ID</td>
      <td>Product Name</td>
      <td>Product Description</td>
      <td>Unit Price</td>
      <td>Status</td>
      <td>Action</td>
    </thead>
    <tbody>
      <?php foreach($items as $item) { ?>
      <tr>
        <td><?php echo $item['product_ID'];?></td>
        <td><?php echo $item['product_name'];?></td>
        <td><?php echo $item['unit_desc'];?></td>
        <td><?php echo $item['unit_price'];?></td>
        <td><?php echo $item['status'];?></td>
        <td>
          <a class="btn btn-info" href="/Team-8---Inventory-Management-System/products/viewItem/<?php echo $item['product_ID']?>">View</a>

          <?php if($item['status'] == "Active") { ?>
            <a class="btn btn-danger" href="/Team-8---Inventory-Management-System/products/updateStatus/<?php echo $item['product_ID']?>/Inactive">Deactivate</a>
          <?php } else { ?>
            <a class="btn btn-success" href="/Team-8---Inventory-Management-System/products/updateStatus/<?php echo $item['product_ID']?>/Active">Activate</a>
          <?php } ?>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>