<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($this->uri->segment(2)=="inserted")
    {
        echo '<p>Data Inserted</p>';

    }
    ?>
    <table>
        <th>
        <tr>
            <th>Supplier Name</th>
            <th>Supplier Address</th>
            <th>Supplier Phone</th>
            <th>Supplier Email</th>
            <th>Delete Supplier</th>
        </tr>
        </th>
    <?php
    if ($display_data->num_rows() >0)
    {
        foreach($display_data->result() as $row)
        {
            ?>
            <tr>
                <td><?php echo $row->name;?></td>
                <td><?php echo $row->address;?></td>
                <td><?php echo $row->phone;?></td>
                <td><?php echo $row->email;?></td>
                <td><a href="<?php echo site_url("Control/delete_supplier/$row->supplier_ID")?>">delete</a></td>
            </tr>
    <?php
        }
    }
    else 
    {
        ?>
        <h3>No data Found</h3>
<?php
    }
    ?>
    </table>
</body>
</html>