<?php
include "db/db.php";

// Create connection

// Check connection
if ($db->connect_error) {
die("Connection failed: " . $db->connect_error);
}

$sql = "SELECT EmpID, EmpName, EmpAddress FROM employee_detail WHERE username='hasa@gmail.com'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "id: " . $row["EmpID"]. " - Name: " . $row["EmpName"]. " " . $row["EmpAddress"]. "<br>";
}
} else {
echo "0 results";
}
$db->close();
?>Type a message
