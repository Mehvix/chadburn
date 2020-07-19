<?php
include_once("consts.php");

session_start();
$phrase = $_POST['phrase'];
$clientPassword = $_POST['password'];

if (!$phrase) {
    die("You need and phrase and password!");
} else {
    $_SESSION['PHRASE'] = $phrase;
    try {
        $connect = new PDO('mysql:host=' . HOST . '; dbname=' . $phrase, USER, PASSWORD);

        $query = "SELECT `password` FROM `messages` where id='1';";
        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $serverPass = $result[0]["password"];
        $check = password_verify($clientPassword, $serverPass);

        if ($check == 1) {
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <title>Chat: <?php echo $phrase ?></title>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                <script src="js/viewer.js"></script>
            </head>
            <body>
            <br/>

            <h2 align="center">Chat: <code> <?php echo $phrase ?> </code></h2>
            <br/>
            <div class="container">
                <form method="POST" id="message_form">
                    <div class="form-group">
                        <input type="text" name="author" id="author" class="form-control" placeholder="Enter Alias"/>
                    </div>
                    <div class="form-group">
            <textarea name="message_content" id="message_content" class="form-control" placeholder="Enter Message"
                      rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" value="0"/>
                        <input type="submit" name="submit" id="submit" class="btn btn-info" value="Send Message"/>
                    </div>
                </form>
                <span id="messages"></span>
                <br/>
                <div id="display_messages"></div>
            </div>
            </body>
            </html>

            <?php
        } else {
            echo "Wrong password!";
        }

    } catch (PDOException $e) {
        die("<b>ERROR!</b> There is no chat that corresponds to the phrase <code>" . $phrase . "</code>...");
    }
}

