<?php
$servername='127.0.0.1';
$username='root';
$password='';
$dbname = 'contact_form';
try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

?>
