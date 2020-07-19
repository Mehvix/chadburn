<?php
include_once("consts.php");

$new_phrase = ($_POST['new-phrase']);
$password = ($_POST['password']);

if (!$new_phrase) {
    header('Location: http://' . HOST . '/chadburn/');  // todo update
    exit();
}

try {
    $connect = new PDO('mysql:host=' . HOST, USER, PASSWORD);

    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Error Handling

    $sql = "CREATE DATABASE " . $new_phrase;
    $connect->exec($sql);

    $connect->exec('USE ' . $new_phrase);

    $sql = 'CREATE TABLE `messages` (
             `id` int(11) primary key not null AUTO_INCREMENT,
             `message` varchar(2048) not null,
             `password` varchar(256),  
             `author` varchar(128) not null,
             `date` timestamp not null default current_timestamp
            )';
    $connect->exec($sql);

    $sql = 'insert into messages (message, password, author) values (\'placeholder\', \'' . password_hash($password, PASSWORD_DEFAULT) . '\', \'placeholder\')';
    echo $sql;
    $connect->exec($sql);


} catch (PDOException $e) {
    echo $e;  // ->getMessage()
    die(); // prevent forwarding
}
?>

<form id="forward_form" action="verify.php" method="POST">
    <input type="hidden" name="phrase" value="<?php echo htmlspecialchars($new_phrase); ?>">
    <input type="hidden" name="password" value="<?php echo htmlspecialchars($password); ?>">
</form>

<script type="text/javascript">
    function submitForms() {
        document.getElementById('forward_form').submit();
    }

    window.onload = submitForms;
</script>