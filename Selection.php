<?php
include "./connection/connection.php";

if (isset($_GET['id_shoes'])) {
    $id_newarrival = intval($_GET['id_shoes']);
    $sql = "SELECT * FROM newarrivalproduct WHERE Id= $id_newarrival";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Product ID: <?php echo htmlspecialchars($id_newarrival); ?></h1>
</body>

</html>