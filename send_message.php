<?php
session_start();

include_once("consts.php");

$connect = new PDO('mysql:host=' . HOST . '; dbname=' . $_SESSION['PHRASE'], USER, PASSWORD);


$error = '';
$author = '';
$message_content = '';

if (empty($_POST["author"])) {
    $error .= '<p class="text-danger">Alias is required!</p>';
} else {
    $author = $_POST["author"];
}

if (empty($_POST["message_content"])) {
    $error .= '<p class="text-danger">Message is required!</p>';
} else {
    $message_content = $_POST["message_content"];
}

if ($error == '') {
    $query = "INSERT INTO messages (message, author) VALUES (:message, :author)";
    $statement = $connect->prepare($query);
    $statement->execute(
        array(
            ':message' => $message_content,
            ':author' => $author
        )
    );
    $error = '<label class="text-success">Message sent!</label>';
}

$data = array(
    'error' => $error
);

echo json_encode($data);


