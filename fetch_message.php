<?php
session_start();
$connect = new PDO('mysql:host=localhost;dbname='.$_SESSION['PHRASE'], 'root', '');


$query = "
SELECT * FROM messages 
ORDER BY id DESC
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = '';
foreach ($result as $row) {
    $output .= '
 <div class="panel panel-default">
  <div class="panel-heading">By <b>' . $row["author"] . '</b> on <i>' . $row["date"] . '</i></div>
  <div class="panel-body">' . $row["message"] . '</div>
 </div>
 ';
}

echo $output;

?>
