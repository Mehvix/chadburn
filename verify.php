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
                <link rel='stylesheet' href='./css/verify.css'/>

                <!-- Favicon-->
                <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
                <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
                <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
                <link rel="manifest" href="favicon/site.webmanifest">
                <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
                <meta name="apple-mobile-web-app-title" content="Chadburn">
                <meta name="application-name" content="Chadburn">
                <meta name="msapplication-TileColor" content="#2d89ef">
                <meta name="theme-color" content="#ffffff">
            </head>
            <body>

            <div class="background">

                <div class="middle" style="min-height: 100%">

                    <h2 align="center"><p>Chat: <code> <?php echo $phrase ?> </code></h2>
                    <br/>
                    <div class="container">
                        <form method="POST" id="message_form">
                            <div class="form-group">
                                <input type="text" name="author" id="author" class="form-control"
                                       placeholder="Enter Alias"/>
                            </div>
                            <div class="form-group">
            <textarea name="message_content" id="message_content" class="form-control" placeholder="Enter Message"
                      rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="id" id="id" value="0"/>
                                <input type="submit" name="submit" id="submit" class="btn btn-info"
                                       value="Send Message"/>
                            </div>
                        </form>
                        <span id="messages"></span>
                        <br/>
                        <div id="display_messages"></div>
                    </div>
                </div>

            </body>

            <script type="text/javascript">
                jQuery(document).ready(function () {
                    jQuery('[data-youtube]').youtube_background();
                });
            </script>

            </html>

            <?php
        } else {
            echo "Wrong password!";
        }

    } catch (PDOException $e) {
        die("<b>ERROR!</b> There is no chat that corresponds to the phrase <code>" . $phrase . "</code>... If you're trying to access a chatroom with a long phrase/password, it can take a minute or so to generate ");
    }
}


