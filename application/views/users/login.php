<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
  </head>
  <body>
    <br>
    <br>
    <div class="container-fluid">
      <div class="container">
        <?=isset($message) ? $message : "";?>
        <h1 class="text-justified">Inventory Management System</h1>
        <br>
        <br>
        <form method="POST" class="form-horizontal" >
          <fieldset>
            <legend class="text-justified">Login</legend>
            <div class="form-group">
              <label for="inputUsername" class="col-lg-2 control-label">Username</label>
              <div class="col-lg-5">
                <input type="text" class="form-control" id="inputUsername" placeholder="Username" name="username"><br />
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="col-lg-2 control-label">Password</label>
              <div class="col-lg-5">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password"><br />
              </div>
            </div>
            <br>
            <div class="form-group">
              <div class="row col-lg-4 col-lg-offset-2">
                <button type="submit" class="btn btn-primary">Login</button>
                <button type="reset" class="btn btn-default">Cancel</button>
                <a href="/Team-8---Inventory-Management-System/users/register" role="button" class="btn btn-success" style="margin-left: 30px;">Click here to sign up!</a>
              </div>
            </div>
          </fieldset>
        </form>
      </div> 
    </div>
  </body>
</html>