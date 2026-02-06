<?php
include "../db.php";
$result = $conn->query("SELECT name, YEAR(hire_date) AS year FROM employees");
while ($row = $result->fetch_assoc()) {
    echo $row['name'] . " - " . $row['year'] . "<br>";
}
?>
