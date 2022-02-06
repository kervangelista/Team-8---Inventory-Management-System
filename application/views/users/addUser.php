<html>
  <head>
    <title>Register</title>
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
            <legend class="text-justified">Register</legend>
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
            <div class="form-group">
              <label for="inputFirstName" class="col-lg-2 control-label">First Name</label>
              <div class="col-lg-5">
                <input type="text" class="form-control" id="inputFirstName" placeholder="John" name="firstName"><br />
              </div>
            </div>
            <div class="form-group">
              <label for="inputLastName" class="col-lg-2 control-label">Last Name</label>
              <div class="col-lg-5">
                <input type="text" class="form-control" id="inputLastName" placeholder="Doe" name="lastName"><br />
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress" class="col-lg-2 control-label">Address</label>
              <div class="col-lg-5">
                <input type="text" class="form-control" id="inputAddress" placeholder="Address" name="address"><br />
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="col-lg-2 control-label">Email</label>
              <div class="col-lg-5">
                <input type="text" class="form-control" id="inputEmail" placeholder="johndoe@example.com" name="email"><br />
              </div>
            </div>
            <div class="form-group">
              <label for="inputPhone" class="col-lg-2 control-label">Phone Number</label>
              <div class="col-lg-5">
                <input type="text" class="form-control" id="inputPhone" placeholder="09*********" name="phone"><br />
              </div>
            </div>
            <div class="form-group">
              <div class="radio">
                <label>
                  <input type="radio" name="role" id="optionsRadios1" value="USER" checked>
                  User
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="role" id="optionsRadios2" value="ADMIN">
                  Admin
                </label>
              </div>
            </div>  
            <br>
            <div class="form-group">
              <div class="col-lg-4 col-lg-offset-2">
                <button type="submit" class="btn btn-primary">Sign up</button>
                <button type="reset" class="btn btn-default">Cancel</button>
              </div>
            </div>
          </fieldset>
        </form>
      </div> 
    </div>
  </body>
</html>