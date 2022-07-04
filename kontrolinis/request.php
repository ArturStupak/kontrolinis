<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid;
        }
    </style>
</head>
<body>
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "contact_form";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM request";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>Surname</th><th>Email</th><th>Phone</th><th>Subject</th><th>Message</th><th>Status</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["name"]. "</td><td>" . $row["surname"]."</td><td>". $row["email"].
        "</td><td>". $row["phone"]."</td><td>". $row["subject"]."</td><td>". $row["message"]."</td>";
        if($row['status'] == 0){
            echo "<td>neperskaitytas</td>";
        }else{
            echo "<td>perksaitytas</td>";
        }
        echo "<td>";
        echo "<form method=".'post'." action=".'delete.php'.">";
        echo "<input type=".'hidden'." name=".'id'." value=".$row["id"].">";
        echo "<input type=".'submit'." value=".'submit'.">";
        echo "</form>";
        echo "</tr>";
        echo "</td>";
    }
    echo "</table>";

} else {
    echo "0 results";
}
$conn->close();
?>



</body>
</html>
