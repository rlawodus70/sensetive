<?php

    $returnCode = $_GET["code"]; 
    $restAPIKey = "e8fe2f6b12320be7b39899f5bee10bf2";
    $callbacURI = "http://192.168.23.42/module/kakao_callback.php";
    // API 요청 URL
    $returnUrl = "https://kauth.kakao.com/oauth/token?grant_type=authorization_code&client_id=".$restAPIKey."&redirect_uri=".$callbacURI."&code=".$returnCode;

    $isPost = false;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $returnUrl);
    curl_setopt($ch, CURLOPT_POST, $isPost);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $headers = array();
    $loginResponse = curl_exec ($ch);
    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close ($ch);

    $accessToken= json_decode($loginResponse)->access_token; // access token 가져옴

    

    //방식은 PHP에서 호출하는 curl_init()도 있고 밑에 방식으로도 가능하다는점 알려드리려고 두 개를 같이 썻습니다.
    $curl = 'curl -v -X GET https://kapi.kakao.com/v2/user/me -H "Authorization: Bearer '.$accessToken.'"';
    $info = shell_exec($curl);
    $info_arr = json_decode($info, true);

    //카카오 프로필 정보를 가져옵니다


    if ($info_arr['id'] > 0) {   

    //해당 아이디값을 정상적으로 가져온다면 디비에 해당 아이디로 회원가입 여부 확인 하여 회원 가입을 하였으면 자동 로그인 구현.

    
    if(이미 가입된 회원이면){
        //자동 로그인
        exit;
        }
    $mb_nickname = $info_arr["properties"]['nickname']; 
    } 

?>