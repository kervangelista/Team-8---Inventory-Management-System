<?=isset($message) ? $message : "";?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>IMS</title>
  </head>




  <body>
  	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  	<div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>home/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            User
          </a>
          <ul class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">User</a></li>
            <li><a class="dropdown-item" href="#">Signout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>



<br>
<br>
<br>
<br>

<!--------------------------------------MODAL BUTTON-------------------------------------------------->
<button type="button" class="btn btn-primary btn-sl" data-toggle="modal" data-target="#exampleModal">
  Create New Purchase Order
</button>

<!--------------------------------------------MODAL---------------------------------------------------------->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Purchase Order</h5>
        </div>
        <div class="modal-body">
        <form method="POST">
        <div class="form-group">
        <label>Order Date</label>
        <input type="date" name="order_date" required>
        </div>
        <div class="form-group">
        <label>Quantity</label>
        <input type="text" name="quantity" required>
        </div>
        <div class="form-group">
    <label for="exampleFormControlSelect1">Product</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
        <div class="form-group form-check">
        <button type="submit" class="btn btn-success">Add</button>
        </form>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
    </div>
    </div>
    </div>

        <!------------------------------------- PURCHASE ORDERS START -------------------------------------->

    <table class="table">
  <thead>
    <tr>
      <th scope="col">order_ID</th>
      <th scope="col">order_date</th>
      <th scope="col">quantity</th>
      <th scope="col">order_number</th>
      <th scope="col">product_ID</th>
      <th scope="col">supplier_ID</th>
    </tr>
  </thead>
  <?php
  foreach ($PO_Detail as $rg){
    ?>
  <tbody>
  <td><?php echo $rg ['order_ID']; ?></td>
  <td><?php echo $rg ['order_date']; ?></td>
  <td><?php echo $rg ['quantity']; ?></td>
  <td><?php echo $rg ['order_number']; ?></td>
  <td><?php echo $rg ['product_ID']; ?></td>
  <td><?php echo $rg ['supplier_ID']; ?></td>
      <td>
      <a class="btn btn-outline-warning btn-sm" href="<?php echo base_url(); ?>home/edit/<?php echo $rg['order_ID']; ?>"role="button">Edit</a> 
      <a class="btn btn-outline-danger btn-sm" href="<?php echo base_url(); ?>home/deleteWarehouse/<?php echo $rg['order_ID']; ?>"role="button">Delete</a>
      </td>
  </tbody>
  <?php
  }
  ?>
</table>


 </body>
</html>