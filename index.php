<?php
    session_start();
    if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {
     ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
        <title>Inventory LOGIN</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">      
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
<body> 
    <nav>
        <label class="logo">Inventory Management</label>
        <ul>
            <li><a class="active" href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Contacts</a></li>
        </ul>
        <label id="icon">
            <i class="fas fa-bars"></i>
        </label>
    </nav>
    <div class="container d-flex justify-content-right align-items-center"
         style="min-height: 80vh">
      <form class="border shadow p-5 rounded"
            action="php/checklogin.php"
            method="post"
            style="width: 450px;">
            <h1 class="text-center p-3">LOGIN</h1>
            <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-danger" role="alert">
                <?=$_GET['error']?>
            </div>          
            <?php } ?>
        <div class="mb-3">
            <label for="username" 
                   class="form-label">Username</label>
            <input type="text" 
                   class="form-control" 
                   name="username"
                   id="username">          
        </div>
        <div class="mb-3">
            <label for="password" 
                   class="form-label">Password</label>
            <input type="password" 
                   class="form-control" 
                   name="password"
                   id="password">          
        </div>
        <div class="mb-0">
            <label class="form-label">Select User Type:</label>
        </div>
        <select class="form-select mb-3" 
                name="role"
                aria-label="Default select example">
            <option selected value="user">User</option>
            <option value="admin">Admin</option>
         
        </select>
      
        <button type="submit" 
                class="btn btn-primary">LOGIN</button>
      </form>
    </div>
</body>
</html>        
<?php }else{
           header("location: home.php");
} ?>