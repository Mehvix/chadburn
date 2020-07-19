<html>
<head>
    <link rel="stylesheet" href="static/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="static/homepage.js"></script>
    <meta charset="UTF-8"/>
    <meta name="viewport" content=
    "width=device-width, initial-scale=1.0"/>
</head>
<body onload="getRandomChars()">
<div class="header" style="height: 520px">  <!-- todo fix this -->
    <h1 class="header">Chadburn</h1>

    <div class="flex-container">
        <div class="flex-child" style="background: #ffffab">
            <p>See Existing Chat</p>
            <form id="existing" action="verify.php" method="POST">
                <input class="menu" name="phrase" type="text" placeholder="Enter existing phrase">
                <input class="menu" name="password" type="text" placeholder="Enter chat's password"><br>
                <button class="menu hoverer" type="submit" style="background: #ffffab">=></button>
            </form>
        </div>

        <div class="flex-child" style="background: #f39292">
            <p>Start New Chat</p>
            <form id="new" action="create_chat.php" method="POST">
                <input class="menu" id="addWords" name="new-phrase" placeholder="Enter new phrase"
                       value="Generating...">
                <input class="menu" name="password" placeholder="Enter new password"><br>

                <p style="font-size: 75%">Expiration: </p>
                <input type="date" id="expiration" name="expiration"><br>
                <button class="menu hoverer" type="submit" style="background: #f39292">=>
                </button>
            </form>
        </div>
    </div>


    <!--     <div class="b-left" class="column">
             <button class="hoverer menu">Create a new chat ID</button>
             <input name="existing-phrase" id="existing-phrase" placeholder="Enter existing phrase">
         </div>

         <div class="b-right" class="column">
             <button class="hoverer menu">Open existing chat ID</button>
             <input name="new-phrase" id="new-phrase" placeholder="Enter new phrase">
         </div>-->
</div>

<div class="explanation-left">
    <h3 class="explanation-left">Privacy First.</h3>
    <p class="explanation-left">We don't store any identifiable information. The<br> only thing needed to create a chat is a
        meeting<br> ID.</p>
</div>


<div class="explanation-right">
    <h3 class="explanation-right">Security-oriented.</h3>
    <p class="explanation-right">We've designed with security as a top priority.</p>
</div>

<div class="explanation-left">
    <h3 class="explanation-left">Free as in Speech.</h3>
    <p class="explanation-left">We have all of our code posted publicly so that you can verify it's legitimacy and host
        your own instance.</p>
    <img src="./image1.png" width="20%">
</div>
</body>
</html>
