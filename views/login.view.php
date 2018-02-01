<?php
//session_start();
require 'php-graph-sdk/src/Facebook/autoload.php'; ?>
<!DOCTYPE HTML>
<html>
<head>
    <title></title>
</head>
<body>
    <?php
    if(isset($POST['msg'])){
        $linkData = ['message'=>$_POST['msg']];
        $fb->post('/me/feed',$message);
    }
    ?>

<?php


?>
<section>

    <div id="particles-js"></div>
    <div class="account-wall">
        <img class="profile-img" src="/assets/img/logo.png"
        alt="">
        <br /><br / /><br />
        <div class="fb-login-button" style ="margin-left: 21%;" data-max-rows="1" data-size="large" data-scope="public_profile,email,user_photos" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
    </div>

</section>


<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : <?php echo APP_ID; ?>,
            cookie     : true,
            xfbml      : true,
            version    : 'v2.10'
        });

        FB.AppEvents.logPageView();

    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
    });


    function checkLoginState() {
        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });
    }
</script>
</body>
</html>
