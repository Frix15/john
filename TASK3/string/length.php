<?php
include "../db.php";
$result = $conn->query("SELECT name, LENGTH(name) AS len FROM employees");
while ($row = $result->fetch_assoc()) {
    echo $row['name'] . " - " . $row['len'] . " characters<br>";
}
?>
