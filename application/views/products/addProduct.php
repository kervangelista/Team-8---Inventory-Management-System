<?=isset($message) ? $message : "";?>
<form method="POST" >
  Product Name <input type="text" name="product_name"><br />
  Product Description <textarea name="unit_desc"></textarea><br />
  Unit Price <input type="text" name="unit_price"> <br />
  <input type="submit" value="Add Item">
</form>
<a href="/Team-8---Inventory-Management-System/products/">View list of items </a>