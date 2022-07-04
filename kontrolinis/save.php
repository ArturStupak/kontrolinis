<?php
$servername='127.0.0.1';
$username='root';
$password='';
$dbname = 'contact_form';

try {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    date_default_timezone_set("Asia/Calcutta");
    $insertdate = date("Y-m-d H:i:s");
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    /* set the PDO error mode to exception */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO request (name,surname,email,phone,subject,message,status)
    VALUES ('$name','$surname','$email', '$phone','$subject', '$message',0)";
    $conn->exec($sql);
    echo "New record created successfully";
    echo "<a href="."request.php".">Go to the list</a>";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>


