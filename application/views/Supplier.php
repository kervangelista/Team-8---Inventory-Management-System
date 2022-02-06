<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1>Supplier CRUD</h1>
    <form method="post" action="<?php echo base_url()?>Control/form_validation">
        <div class="form-group">
            <label for="">Supplier Name
                <input type="text" name="name">
                <span><?php echo form_error("name");?></span>

            </label>
            <label for="">Supplier Address
                <input type="text" name="address">
                <span><?php echo form_error("address");?></span>
                
            </label>
            <label for="">Supplier Phone
                <input type="number" name="phone">
                <span><?php echo form_error("phone");?></span>
                
            </label>
            <label for="">Supplier Email
                <input type="text" name="email">
                <span><?php echo form_error("email");?></span>
                
            </label>
            <div class="form-group">
                <input type="submit" name="insert" value="Submit">
            </div>
        </div>
    </form>
    </div>

</body>
</html>


