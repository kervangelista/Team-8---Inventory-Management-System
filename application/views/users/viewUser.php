<html>
  <head>
    <title>Account Profile</title>
    <link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
  </head>
  <body>
    <div class="container-fluid">
      <div class="container">
        <?=isset($message) ? $message : "";?>
        <h1 class="text-justified">Account Profile</h1>
        <br>
        <br>
        <form method="POST" class="form-horizontal" action="/Team-8---Inventory-Management-System/users/updateUser" >
          <fieldset>
             <input type="hidden" name="user_ID" value="<?php echo $user['user_ID']?>">
            <div class="form-group">
              <label for="inputUsername" class="col-lg-2 control-label">Username</label>
              <div class="col-lg-5">
                <input type="text" class="form-control" id="inputUsername" placeholder="Username" name="username" value="<?php echo $user['username']?>"><br />
              </div>
            </div>
            <div class="form-group">
              <label for="inputFirstName" class="col-lg-2 control-label">First Name</label>
              <div class="col-lg-5">
                <input type="text" class="form-control" id="inputFirstName" placeholder="John" name="firstName" value="<?php echo $user['firstName']?>"><br />
              </div>
            </div>
            <div class="form-group">
              <label for="inputLastName" class="col-lg-2 control-label">Last Name</label>
              <div class="col-lg-5">
                <input type="text" class="form-control" id="inputLastName" placeholder="Doe" name="lastName" value="<?php echo $user['lastName']?>"><br />
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress" class="col-lg-2 control-label">Address</label>
              <div class="col-lg-5">
                <input type="text" class="form-control" id="inputAddress" placeholder="Address" name="address" value="<?php echo $user['address']?>"><br />
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="col-lg-2 control-label">Email</label>
              <div class="col-lg-5">
                <input type="text" class="form-control" id="inputEmail" placeholder="johndoe@example.com" name="email" value="<?php echo $user['email']?>"><br />
              </div>
            </div>
            <div class="form-group">
              <label for="inputPhone" class="col-lg-2 control-label">Phone Number</label>
              <div class="col-lg-5">
                <input type="text" class="form-control" id="inputPhone" placeholder="09*********" name="phone" value="<?php echo $user['phone']?>"><br />
              </div>
            </div>
            <div class="form-group">
              <label for="role" class="col-lg-2 control-label">Role</label>
              <div class="col-lg-5">
                <input type="text" class="form-control" id="role" name="role" value="<?php echo $user['role']?>"><br />
              </div>
            </div>
            <br>
            <div class="form-group">
              <div class="col-lg-4 col-lg-offset-2">
                <button type="submit" class="btn btn-primary">Update User</button>
                <button type="reset" class="btn btn-default">Cancel</button>
              </div>
              <a href="/Team-8---Inventory-Management-System/users" role="button" class="btn btn-success">Back to list of users.</a>
            </div>
          </fieldset>
        </form>
      </div> 
    </div>
  </body>
</html>