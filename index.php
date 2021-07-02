<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Employee Details</h2>

<table border="2">
  <tr>
    <td>Sr.No.</td>
    <td>Product Name</td>
    <td>description</td>
    <td>category</td>
  </tr>

<?php

include "dbconn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from product"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['description']; ?></td>
    <td><?php echo $data['cat']; ?></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>