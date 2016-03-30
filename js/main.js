$(function ()
{
    //Update clock per 1 sec
    setInterval('updateClock()', 1000 );

    //Update Feature color per 1 sec
    setInterval('changeFeatureColor()', 1000 );

    //Event for scroll logic for button `To-Top`
    $(window).scroll(function() {
        if ($('body').height() <= ($(window).scrollTop() + $(window).height() )) {
            $('#to-top').show();
        }
        else
            $('#to-top').hide();
    });

    //By default
    $('.page-content').hide();          //All pages are hidden
    $('.home-page').show();             //Welcome(index) page is visible

    //Open Home Page - Nav Btn
    $('#home-page').click(function () {
        $('.page-content').hide();
        $('.home-page').show();
    });

    //Open Login Page - Nav Btn
    $('#login-page').click(function () {
        $('.page-content').hide();
        $('.login-page').show();
    });

    //Open Logout Page - Nav Btn
    $('#logout-page').click(function () {
        $('.page-content').hide();
        $('.logout-page').show();
    });

    //Open About Us Page - Nav Btn
    $('#about-us-page').click(function () {
        $('.page-content').hide();
        $('.about-us-page').show();
    });

    //`To Top` - Footer
    $("#to-top").on("click",function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
    });

    //Login
    $('#btn-login').click(function () {

        var $login    = $('#user-login').val();
        var $password = $('#user-password').val();

        if($login != "" && $password != ""){
            $.ajax({
                url:"architecture/Controller/controller_auth.php?login="+$login+"&password="+$password
            }).done(function (data) {
                if(data == 'TRUE'){
                    alert('Welcome to Your personal cabinet, ' + $login + '!');
                    window.location.replace("index.php");
                }
                else
                {
                    alert("Login or Password is wrong!");
                }
            });
        } else
            alert("Enter login and password!");
    });

    //Logout
    $('#btn-logout').click(function (){
        $.ajax({
            url:'architecture/Controller/controller_auth.php?logout=TRUE'
        }).done(function (data) {
            if(data === 'TRUE'){
                alert('You have successfully logout!');
                window.location.replace("index.php");
            }
            else
            {
                alert('You have still Log In !!!');
            }
        });
    });

});

//`To Top` change color
function changeFeatureColor() {
    var color = '#' + Math.random().toString(18).substring(2, 8);
    $('#to-top').css('color', color);
}

//Change clock time
function updateClock ( ) {
    var currentTime     = new Date ( );
    var currentHours    = currentTime.getHours ( );
    var currentMinutes  = currentTime.getMinutes ( );
    var currentSeconds  = currentTime.getSeconds ( );
    var dayPart         = ( currentHours < 12 ) ? "AM" : "PM";

    currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;
    currentHours = ( currentHours == 0 ) ? 12 : currentHours;

    currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
    currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;

    var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + dayPart;

    $('.footer-date').html(currentTimeString);
}
