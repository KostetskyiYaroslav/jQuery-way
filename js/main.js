$(function ()
{
    //Update clock per 1 sec
    setInterval('updateClock()', 1000 );

    //Open Home Page by default
    $('.page-content').hide();
    $('.home-page').show();

    //Open Home Page
    $('#home-page').click(function () {
        $('.page-content').hide();
        $('.home-page').show();
    });

    //Open Login Page
    $('#login-page').click(function () {
        $('.page-content').hide();
        $('.login-page').show();
    });

    //Open Logout Page
    $('#logout-page').click(function () {
        $('.page-content').hide();
        $('.logout-page').show();
    });

    //Open Upload Page
    $('#upload-page').click(function () {
        $('.page-content').hide();
        $('.upload-page').show();
    });

    //Open About Us Page
    $('#about-us-page').click(function () {
        $('.page-content').hide();
        $('.about-us-page').show();
    });

    //Login
    $('#btn-login').click(function () {

        var $login    = $('#user-login').val();
        var $password = $('#user-password').val();
        if($login != "" && $password != ""){
            $.ajax({
                url:"architecture/Controller/controller_auth.php?login="+$login+"&password="+$password
            }).done(function (data) {
                if(data === 'TRUE'){
                    alert('Welcome to Your personal cabinet, ' + $login + '!');
                    window.location.replace("index.php");
                } else if(data === 'FALSE') {
                    alert("Login or Password is wrong!");
                } else
                {
                    alert("Your have successfully logout!");
                    window.location.replace("index.php");
                }
            });
        } else
            alert("Enter login and password!");
    });

    $('#myForm').ajaxForm(function() {
        alert("Thank you for your comment!");
    });

});

function updateClock ( ) {
    var currentTime     = new Date ( );
    var currentHours    = currentTime.getHours ( );
    var currentMinutes  = currentTime.getMinutes ( );
    var currentSeconds  = currentTime.getSeconds ( );
    var DayPart         = ( currentHours < 12 ) ? "AM" : "PM";

    currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
    currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;

    currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;
    currentHours = ( currentHours == 0 ) ? 12 : currentHours;

    var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + DayPart;

    $('.footer-date').html(currentTimeString);
}
