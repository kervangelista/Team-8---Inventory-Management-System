<div class="container">
  <?=isset($message) ? $message : "";?>
  <form method="POST" class="form-horizontal" >
    <fieldset>
      <legend class="text-justified">Add products/Item</legend>
      <div class="form-group">
        <label for="product_name" class="col-lg-2 control-label">Product Name</label>
        <div class="col-lg-5">
          <input type="text" class="form-control" id="inputProductName" placeholder="Product Name" name="product_name"><br />
        </div>
      </div>
      <div class="form-group">
        <label for="unit_desc" class="col-lg-2 control-label">Product Description</label>
        <div class="col-lg-5">
          <textarea class="form-control" name="unit_desc" rows="3" id="textArea"></textarea>
          <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
        </div>
      </div>
      <div class="form-group">
        <label for="unit_price" class="col-lg-2 control-label">Unit Price</label>
        <div class="col-lg-5">
          <input type="text" class="form-control" id="inputUnitPrice" placeholder="₱1000 (for example)" name="unit_price"><br />
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-3 col-lg-offset-2">
          <button type="submit" class="btn btn-primary">Add Item</button>
          <button type="reset" class="btn btn-default">Cancel</button>
        </div>
        <a class="col-lg-2 btn btn-info" href="/Team-8---Inventory-Management-System/products/">View list of items </a>
      </div>
    </fieldset>
  </form>
</div>