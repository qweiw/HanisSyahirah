<?php
require 'conn.php';

$idorderdetail = $_GET['idorderdetail'];
$sql = "DELETE FROM orderdetails WHERE idorderdetail = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idorderdetail);
$stmt->execute();
$stmt->close();

header('location: orderdetails.php?menu=senarai');