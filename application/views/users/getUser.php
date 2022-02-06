<div class="container">
  <?isset($message) ? $message : ""; ?>
    <a class="btn btn-info" href = "/Team-8---Inventory-Management-System/users/">View Active users</a>
    <a class="btn btn-danger" href = "/Team-8---Inventory-Management-System/users/viewInactive">View inactive users</a>
  <br>
  <br>
  <table class="table table-striped table-bordered table-hover table-condensed text-center">
    <thead>
      <td>User ID</td>
      <td>Username</td>
      <td>Password</td>
      <td>First Name</td>
      <td>Last Name</td>
      <td>Email</td>
      <td>Phone</td>
      <td>Role</td>
      <td>Status</td>
      <td>Action</td>
    </thead>
    <tbody>
      <?php foreach($users as $user) { ?>
      <tr>
        <td><?php echo $user['user_ID'];?></td>
        <td><?php echo $user['username'];?></td>
        <td class=""><?php echo $user['password'];?></td>
        <td><?php echo $user['firstName'];?></td>
        <td><?php echo $user['lastName'];?></td>
        <td><?php echo $user['email'];?></td>
        <td><?php echo $user['phone'];?></td>
        <td><?php echo $user['role'];?></td>
        <td><?php echo $user['status'];?></td>
        <td>
          <a class="btn btn-info btn-sm" href="/Team-8---Inventory-Management-System/users/viewUser/<?php echo $user['user_ID']?>">View</a>

          <?php if($user['status'] == "Active") { ?>
            <a class="btn btn-danger btn-sm" href="/Team-8---Inventory-Management-System/users/updateStatus/<?php echo $user['user_ID']?>/Inactive">Deactivate</a>
          <?php } else { ?>
            <a class="btn btn-success btn-sm" href="/Team-8---Inventory-Management-System/users/updateStatus/<?php echo $user['user_ID']?>/Active">Activate</a>
          <?php } ?>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>