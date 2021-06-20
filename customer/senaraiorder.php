<?php 
    include 'conn.php';
?>
<!DOCTYPE html>
<html lang ="en">
  <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>ESS</title>
</head>
<body>

<table border="1">
    <tr>
        <th>Bil</th>
        <th>ID Order Detail</th>
        <th>ID Order</th>
        <th>ID Catalog</th>
        <th>Quantity</th>
        <th>Action</th>
        
    </tr>
    <?php
    $bil = 1;
    $sql = "SELECT * FROM orderdetails ORDER BY idorderdetail";
    $result = $conn->query($sql);
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row->idorderdetail; ?></td>
            <td><?php echo $row->idorders; ?></td>
            <td><?php echo $row->idcatalog; ?></td>
            <td><?php echo $row->quantity; ?></td>
            <td>        
                <a href="deleteorder.php?idorderdetail=<?php echo $row->idorderdetail; ?>">Delete Order</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>


<footer style="background-color: #d99393">
</footer>
  </body>
</html>