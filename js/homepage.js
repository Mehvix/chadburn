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


