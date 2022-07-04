<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "contact_form";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = $_POST['id'];
$sql = "DELETE FROM request WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    echo "<a href="."request.php".">Go to the list</a>";
} else {
    echo "Error deleting record: " . $conn->error;
    echo "<a href="."request.php".">Go to the list</a>";
}
$conn->close();
