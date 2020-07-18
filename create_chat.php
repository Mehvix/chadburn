<?php
include_once("consts.php");

$new_phrase = $_POST['new-phrase'];
if (!$new_phrase) {
    header('Location: http://localhost/chadburn/');  // todo update
    exit();
}
//    $_SESSION['PHRASE']=$new_phrase;
try {
    // Creating a connection
    $connect = new PDO('mysql:host='.HOST.';dbname='.$_SESSION['PHRASE'], USER, PASSWORD);

    $connect->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );//Error Handling


    // Creating a database named newDB
    $sql = "CREATE DATABASE " . $new_phrase;
    if ($connect->exec($sql) === TRUE) {
        echo "Successfully created the chat" . $new_phrase;
    }

    $connect->exec('USE '.$new_phrase);

    $sql = 'CREATE TABLE `messages` (
             `id` int(11) primary key not null AUTO_INCREMENT,
             `message` varchar(2048) not null,
             `author` varchar(40) not null,
             `date` timestamp not null default current_timestamp
            )';
    $connect->exec($sql);


} catch (PDOException $e) {
    echo $e;
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