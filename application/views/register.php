<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
       <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Register</h1>
   <?php  echo form_open("product/register_auth", array(
    "method" => "post",
    "enctype" => "multipart/form-data")); ?>

  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control"  placeholder="Enter email" name="username" value="<?php echo set_value("username") ?>">
    <?php  echo form_error("username","<div class='error'>","</div>"); ?>

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" value="<?php echo set_value("password") ?>">
  </div>
    <?php  echo form_error("password","<div class='error'>","</div>"); ?>

  <button type="submit" class="btn btn-primary">

Sign up
  </button>
<a href="<?php echo site_url("product/login")?>">Login here</a>
<?php echo form_close(); ?>

</body>
</html>