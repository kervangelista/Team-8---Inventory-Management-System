<div class="container">
  <?=isset($message) ? $message : "";?>
  <form method="POST" action="/Team-8---Inventory-Management-System/products/updateItem" class="form-horizontal">
    <fieldset>
      <input type="hidden" name="product_ID" value="<?php echo $item['product_ID']?>">
      <legend class="text-justified">Item details:</legend>
        <div class="form-group">
          <label for="product_name" class="col-lg-2 control-label">Product Name</label>
          <div class="col-lg-5">
            <input type="text" class="form-control" id="inputProductName" value="<?php echo $item['product_name']?>" name="product_name"><br />
          </div>
        </div>
        <div class="form-group">
          <label for="unit_desc" class="col-lg-2 control-label">Product Description</label>
          <div class="col-lg-5">
            <textarea class="form-control" name="unit_desc" rows="3" id="textArea"><?php echo $item['unit_desc']?></textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="unit_price" class="col-lg-2 control-label">Unit Price</label>
          <div class="col-lg-5">
            <input type="text" class="form-control" id="inputUnitPrice" value="<?php echo $item['unit_price']?>" name="unit_price"><br />
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-3 col-lg-offset-2">
            <button type="submit" class="btn btn-primary" value="Update Item">Update Item</button>
            <button type="reset" class="btn btn-default">Cancel</button>
          </div>
          <a class="col-lg-2 btn btn-info" href="/Team-8---Inventory-Management-System/products/">Back to list of items </a>
        </div>
    </fieldset>
  </form>
</div>