<?php
include_once("consts.php");

$new_phrase = ($_POST['new-phrase']);

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
             `author` varchar(128) not null,
             `date` timestamp not null default current_timestamp
            )';
    $connect->exec($sql);


} catch (PDOException $e) {
    echo $e->getMessage();
    die(); // prevent forwarding
}
?>

<form id="forward_form" action="viewer.php" method="POST">
    <input type="hidden" name="phrase" value="<?php echo htmlspecialchars($new_phrase); ?>">
</form>

<script type="text/javascript">
    //Our form submission function.
    function submitForm() {
        document.getElementById('forward_form').submit();
    }

    //Call the function submitForm() as soon as the page has loaded.
    window.onload = submitForm;
</script>