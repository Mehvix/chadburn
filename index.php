<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8"/>
    <meta name="viewport" content=
    "width=device-width, initial-scale=1.0"/>
</head>

<div class="header" style="height: 300px">
    <h1 class="header">Chadburn</h1>

    <div class="flex-container">
        <div class="flex-child" style="background: #fae3d9">
            <form id="existing" action="viewer.php" method="POST">
                <input class="menu" name="phrase" type="text" placeholder="Enter existing phrase">
                <button class="menu hoverer" type="submit" style="background: #ffffff">=>
                </button>
            </form>
        </div>

        <div class="flex-child" style="background: #ffb6b9">
            <form id="new" action="create_chat.php" method="POST">
                <input class="menu" name="new-phrase" placeholder="Enter new phrase">
                <button class="menu hoverer" type="submit" style="background: #f39292">=>
                </button>
            </form>
        </div>
    </div>


    <!--    <div class="b-left" class="column">-->
    <!--        <button class="hoverer menu">Create a new chat ID</button>-->
    <!--        <input name="existing-phrase" id="existing-phrase" placeholder="Enter existing phrase">-->
    <!--    </div>-->
    <!---->
    <!--    <div class="b-right" class="column">-->
    <!--        <button class="hoverer menu">Open existing chat ID</button>-->
    <!--        <input name="new-phrase" id="new-phrase" placeholder="Enter new phrase">-->
    <!--    </div>-->
</div>

<div class="explanation-left">
    <h3 class="explanation-left">Privacy First.</h3>
    <p class="explanation-left">We don't store any identifiable information. The<br> only thing needed to create a chat is a
        meeting<br> ID.</p>
</div>


<div class="explanation-right">
    <h3 class="explanation-right">Security-oriented.</h3>
    <p class="explanation-right">We've designed with security in mind, and the<br> contents of each chat is hashed such that
        even<br> we can't read it.</p>
    <img src="./image0.png" width="20%">

</div>

<div class="explanation-left">
    <h3 class="explanation-left">Free as in Speech.</h3>
    <p class="explanation-left">We have all of our code posted publicly so that you can verify it's legitimacy and host
        your own instance.</p>
    <img src="./image1.png" width="20%">
</div>

</html>
