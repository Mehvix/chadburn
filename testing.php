<?php

$dbServername   = "localhost";
$dbUser         = "root";   // default for xampp
$dbPass         = "";   // default for xampp
$dbName         = "chats";

$conn = mysqli_connect($dbServername, $dbUser, $dbPass, $dbName);

if ($conn->connect_error or $conn === false) {
    die("Database Connection failed: " . $conn->connect_error);
}
?>


<html lang="en">
<head>

    <title>Chadburn - home</title></head>

<body>

<form action="sendmessage.php" method="POST">
    <input type="text" name="author" placeholder="Alias">
    <br>
    <input type="text" name="content" placeholder="Message">
    <br>
    <button type="submit" name="submit">Send Message</button>
</form>

<?php
    $sql = "SELECT * FROM chat1;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['message'] . "<br>";
        }
    }

?>


</body>

</html>