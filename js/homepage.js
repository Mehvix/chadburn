function getRandomChars() {
    /*        $.getJSON("https://random-word-api.herokuapp.com/word?number=7", function (result) {
                var concat = "";
                $.each(result, function (i, field) {
                    concat += field + " ";
                });
                concat = concat.slice(0, -1);  // remove last dash*/
    var result           = '';
    var alphabet       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = alphabet.length;
    for ( var i = 0; i < 16; i++ ) {
        result += alphabet.charAt(Math.floor(Math.random() * charactersLength));
    }
    $("#addWords").val(result);
}

var scrollToTop = window.setInterval(function() {
    var pos = window.pageYOffset;
    if ( pos > 0 ) {
        window.scrollTo( 0, pos - 20 ); // how far to scroll on each step
    } else {
        window.clearInterval( scrollToTop );
    }
}, 16); // how fast to scroll (this equals roughly 60 fps)


