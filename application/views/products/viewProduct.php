<?=isset($message) ? $message : "";?>
<form method="POST" action="/Team-8---Inventory-Management-System/products/updateItem">
  <input type="hidden" name="product_ID" value="<?php echo $item['product_ID']?>">
  Product Name <input type="text" name="product_name" value="<?php echo $item['product_name']?>"><br />
  Product Description <textarea name="unit_desc"><?php echo $item['unit_desc']?></textarea><br />
  Unit Price <input type="text" name="unit_price" value="<?php echo $item['unit_price']?>"> <br />
  <input type="submit" value="Update Item">
</form>

<a href = "/Team-8---Inventory-Management-System/products/">Back to list of items</a>