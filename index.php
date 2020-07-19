<!DOCTYPE html>
<html lang='en'>
<head>
    <meta class="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Chadburn | menu</title>
    <!-- todo add metadata here -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.youtube-background.js?v=1.0.7"></script>
    <script type="text/javascript" src="js/homepage.js"></script>
    <!--    <script type="text/javascript" src='js/app.min.js'></script>-->
    <!--    ^used for (deprecated) scroll button-->
    <link rel='stylesheet' href='css/style.css'/>

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
<body onload="getRandomChars()">
<!-- Hero unit -->
<div class="hero">
    <div id="ytbg" data-ytbg-fade-in="false" data-youtube="https://youtu.be/JflUspLN-7I?t=703"></div>

    <div style="opacity: 45%" class="hero__overlay hero__overlay--gradient"></div>
    <div class="hero__mask"></div>
    <div class="hero__inner">
        <div class="container">
            <div class="hero__content">
                <div class="hero__content__inner" id='navConverter'>
                    <h1 class="hero__title">Chadburn</h1>
                    <p class="hero__text">Chadburn is an MIT licensed messaging service with an emphasis on privacy and
                        security.</p>

                    <div class="menu-containers" style="border-radius: 10px 10px 10px 10px">
                        <h3>See Existing Chat</h3>
                        <form id="existing" action="verify.php" style="margin-bottom: 0" method="POST">
                            <input class="menu" name="phrase" type="text" placeholder="Enter existing phrase">
                            <input class="menu" name="password" type="password" placeholder="Enter chat's password"><br>
                            <button class="menu hoverer" type="submit" style="background: #FFB6B9">Decrypt Chat</button>
                        </form>
                    </div>

                    <div class="menu-containers" style="border-radius: 10px 10px 75px 10px; margin-bottom: 0">
                        <h3>Start New Chat</h3>
                        <form id="new" action="create_chat.php" method="POST" style="margin-bottom: 0">
                            <input class="menu" id="addWords" name="new-phrase" type="text"
                                   placeholder="Enter new phrase"
                                   value="Generating...">
                            <input class="menu" name="password" type="password"
                                   placeholder="Enter new password"><br>

                            <div style="align-content: center">
                                <p style="font-size: 133%; width: 30%; float: left; margin-left: 20px"> Expiration: </p>
                                <input style="width: 52%; float: left; margin-right: 0px;" type="date"
                                       id="expiration" name="expiration"><br>
                            </div>
                            <br><br>
                            <button class="menu hoverer" type="submit" style="background: #61C0BF; margin-right: 33%">
                                Begin new chat
                            </button>
                        </form>
                    </div>
                    <!--                    <a href="#" class="button button__accent">See Existing Chat</a>-->
                    <!--                    <a href="#" class="button hero__button">Start New Chat</a>-->
                </div>
            </div>
        </div>
    </div>
</div>

<!--<div class="hero__sub">
		<span id="scrollToNext" class="scroll">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                 y="0px" class='hero__sub__down' fill="currentColor" width="512px" height="512px" viewBox="0 0 512 512"
                 style="enable-background:new 0 0 512 512;" xml:space="preserve"><path
                        d="M256,298.3L256,298.3L256,298.3l174.2-167.2c4.3-4.2,11.4-4.1,15.8,0.2l30.6,29.9c4.4,4.3,4.5,11.3,0.2,15.5L264.1,380.9c-2.2,2.2-5.2,3.2-8.1,3c-3,0.1-5.9-0.9-8.1-3L35.2,176.7c-4.3-4.2-4.2-11.2,0.2-15.5L66,131.3c4.4-4.3,11.5-4.4,15.8-0.2L256,298.3z"/></svg>
		</span>
</div>-->

<!--Steps-->
<!--<div class="steps landing__section">
    <div class="container">
        <h2>Who can use Evie?</h2>
        <p>Here's who we can think of, but surely creative people will surprise us.</p>
    </div>
    <div class="container">
        <div class="steps__inner">
            <div class="step">
                <div class="step__media">
                    <img src="./images/github.svg" class="step__image">
                </div>
                <h4>Programmers</h4>
                <p class="step__text">A landing page for your open source projects. Present your solution, easily create docs.</p>
            </div>
            <div class="step">
                <div class="step__media">
                    <img src="./images/privacy.png" class="step__image">
                </div>
                <h4>Designers</h4>
                <p class="step__text">A website for your own freebies. Let the world download and use your artwork.</p>
            </div>
            <div class="step">
                <div class="step__media">
                    <img src="./images/undraw_creation.svg" class="step__image">
                </div>
                <h4>Makers</h4>
                <p class="step__text">A great starting point for your web application. Focus on your idea and execution.</p>
            </div>
        </div>
    </div>
</div>-->

<!-- Expanded sections -->
<div class="expanded landing__section">
    <div class="container">
        <div class="expanded__inner">
            <div class="expanded__media">
                <img src="./images/foss.png" class="expanded__image" alt="secure">
            </div>
            <div class="expanded__content">
                <h2 class="expanded__title">Free as in Speech.</h2>
                <p class="expanded__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sagittis
                    libero vitae congue condimentum. Suspendisse potenti. Sed risus risus, ultrices vitae ullamcorper
                    ut, mattis vel nisi. Cras nulla eros, laoreet non sapien at, pellentesque pulvinar purus. Etiam
                    venenatis, orci eu ornare eleifend, libero leo sodales orci, et convallis purus lectus vel leo. Sed
                    non augue ut urna pretium dapibus. Phasellus tortor velit, porttitor euismod metus non, cursus
                    rhoncus ex.</p>
            </div>
        </div>
    </div>
</div>
<div class="expanded landing__section">
    <div class="container">
        <div class="expanded__inner">
            <div class="expanded__media">
                <img src="./images/privacy.png" class="expanded__image" alt="privacy">
            </div>
            <div class="expanded__content">
                <h2 class="expanded__title">Private.</h2>
                <p class="expanded__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sodales dui non
                    felis viverra luctus. Pellentesque sodales sem arcu. Vivamus ullamcorper gravida sem, sit amet
                    accumsan enim aliquet a. Maecenas sollicitudin imperdiet gravida. Duis egestas augue sit amet nibh
                    consequat, quis congue dui congue. Donec euismod augue id urna vehicula scelerisque. Vivamus egestas
                    ex vel hendrerit rutrum. Nam id feugiat lectus, eget tincidunt massa. Nunc viverra posuere enim nec
                    imperdiet.</p>
            </div>
        </div>
    </div>
</div>
<div class="expanded landing__section">
    <div class="container">
        <div class="expanded__inner">
            <div class="expanded__media">
                <img src="./images/secure.png" class="expanded__image" alt="foss">
            </div>
            <div class="expanded__content">
                <h2 class="expanded__title">Secure.</h2>
                <p class="expanded__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut scelerisque
                    lacus. Nunc faucibus dolor ut faucibus posuere. Donec orci nunc, bibendum ut nibh a, venenatis
                    lobortis velit. Phasellus aliquet lorem at urna mollis pellentesque. Mauris et tortor quis neque
                    laoreet egestas non id leo. Donec maximus tellus id mi pellentesque euismod. Curabitur vitae augue
                    et mi commodo ullamcorper a quis mi. Curabitur ut feugiat sapien.</p>
            </div>
        </div>
    </div>
</div>
<!-- Call To Action -->
<div class="cta cta--reverse">
    <div class="container">
        <div class="cta__inner">
            <h2 class="cta__title">Start messaging now</h2>
            <p class="cta__sub cta__sub--center">Use this hosted instance, or download and run it yourself!</p>
            <a onclick="scrollToTop()" class="button button__accent">Message Now</a><br>
            <a href="https://github.com/mehvix/chadburn" class="button button__delete">Download Chadburn</a>
            <!--todo make this go to top of page^-->
        </div>
    </div>
</div>


<script>
    const scrollToTop = () => {
        const c = document.documentElement.scrollTop || document.body.scrollTop;
        if (c > 0) {
            window.requestAnimationFrame(scrollToTop);
            window.scrollTo(0, c - c / 8);
        }
    };
</script>

<!-- Footer -->
<div class="footer footer--dark">
    <div class="container">
        <div class="footer__inner">
            <a href="index.php" class="footer__textLogo">Chadburn</a>
            <div class="footer__data">
                <div class="footer__data__item">
                    <div class="footer__row">
                        Created by <a href="https://mehvix.com" target="_blank" class="footer__link">Max
                            Vogel</a> and <a href="https://youtu.be/dQw4w9WgXcQ" target="_blank" class="footer__link">Emily
                            Yao</a> for <a href="https://organize.mlh.io/participants/events/3593-hackitshipit"
                                           target="_blank" class="footer__link">HackItShipIt</a>
                    </div>
                </div>
                <div class="footer__data__item">
                    <div class="footer__row">Using <a href="https://github.com/anges244/evie" target="_blank"
                                                      class="footer__link">evie</a> theme.
                    </div>
                </div>
                <div class="footer__data__item">
                    <div class="footer__row">
                        <a href="https://github.com/mehvix/chadburn" target="_blank" class="footer__link">GitHub</a>
                    </div>
                    <div class="footer__row">
                        <a href="" target="_blank" class="footer__link">DevPost</a>
                        <!--todo @emily add devpost-->
                    </div>
                    <div class="footer__row">
                        <a href="https://github.com/Mehvix/chadburn/blob/master/LICENSE" class="footer__link">MIT
                            license</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('[data-youtube]').youtube_background();
    });
</script>

</html>