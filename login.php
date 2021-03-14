<?php 	
        $restAPIKey = "e8fe2f6b12320be7b39899f5bee10bf2";
        $callbacURI = "http://192.168.23.42/module/kakao_callback.php";
        $kakaoUrl = "https://kauth.kakao.com/oauth/authorizeclient_id=".$restAPIKey."&redirect_uri=".$callbacURI."&response_type=code";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sensetive</title>

    <link rel="icon" type="image/png" sizes="48x48" href="image/icon/favicon.png">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/login.css">

</head>
<body>
    <div id="login--wrap" class="col-box">
        <div id="login__imgbox"><a href="index.php"><img src="image/sensitive_logo.png"></a></div>
        <form method="post" action="login_ok" id="login--control" class="col-box">
            <input type="text" class="login--text input--width" name="id" placeholder="이메일">
            <input type="text" class="login--text input--width" name="password" placeholder="비밀번호">
            <button type="submit" id="form-btn">로그인</button>
        </form>
        <button id="join-btn" onclick="location.href='join.php'">회원가입</button>
        <div id="social--wrap">
            <p id="social--text">SNS 계정으로 간편하게 로그인/회원가입</p>
            <div id="social--box" class="row-box">
                <a href=""><img src="image/icon/facebook.png"></a>
                <a href="<?=$kakaoUrl ?>"><img src="image/icon/kakao.png"></a>
                <a href=""><img src="image/icon/naver.png"></a>
            </div>
        </div>
    </div>

</body>
</html>