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
    <link rel="stylesheet" href="css/join.css">
</head>
<body>
    <div id="join--box" class="col-box">
        <p id="join--title">회원가입</p>
        <div id="social--wrap" class="col-box max--width">
            <p id="social--text">SNS 계정으로 간편하게 회원가입</p>
            <div id="social--box" class="row-box">
                <a href=""><img src="image/icon/facebook.png"></a>
                <a href=""><img src="image/icon/kakao.png"></a>
                <a href=""><img src="image/icon/naver.png"></a>
            </div>
        </div>
        <form method="post" action="module/join_ok.php" id="user--info--wrap" class="max--width col-box">
            <ul class="col-box max--width">
                <li id="user__info--box" class="input--box">
                    <p>아이디</p>
                    <input type="text" name="id" placeholder="아이디" class="user__infobox max--width">
                </li>
                <li id="user__info--box" class="input--box">
                    <p>비밀번호</p>
                    <input type="password" name="password" placeholder="비밀번호" class="user__infobox max--width">
                </li>
                <li id="user__info--box" class="input--box">
                    <p>닉네임</p>
                    <input type="text" name="nickname" placeholder="닉네임" class="user__infobox max--width">
                </li>
                <li id="user__info--box" class="input--box">
                    <p>질병</p>
                    <input type="password" name="disease" placeholder="질병" class="user__infobox max--width">
                </li>
            </ul>
            <button type="submit">회원가입 완료</button>
        </form>
    </div>
    <?php include "module/footer.php" ?>
</body>
</html>