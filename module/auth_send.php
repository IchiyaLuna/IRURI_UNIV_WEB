<?php
header("Content-Type: application/json");

$oktogo = TRUE;

if (!isset($_COOKIE['authcall'])) {
    setcookie("authcall", 1, time() + 3600 * 24, "/");
} else {

    if ($_COOKIE['authcall'] > 3) {
        $list = array(
            "authcode" => 0000000,
            "authresult" => 999
        );
        $oktogo = FALSE;
        echo json_encode($list);
    }

    $newcall = $_COOKIE['authcall'] + 1;
    setcookie("authcall", $newcall, time() + 3600 * 24, "/");
}

function GenRandNum($length = 6)
{
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

if ($oktogo) {
    $phone = $_POST['pnum'];

    $sms_url = "https://apis.aligo.in/send/"; // 전송요청 URL
    $sms['user_id'] = "iruriedu"; // SMS 아이디
    $sms['key'] = "t6i41u1vw1pq4utey61k5tssljtj437w"; //인증키

    $randcode = GenRandNum(6);

    $_POST['msg'] = '안녕하세요. 이루리 학원입니다. 인증 번호는 [' . $randcode . '] 입니다.';
    $_POST['receiver'] = $phone;

    $_POST['sender'] = "025588520";
    //$_POST['testmode_yn'] = 'Y';
    $_POST['msg_type'] = 'SMS';

    $sms['msg'] = stripslashes($_POST['msg']);
    $sms['receiver'] = $_POST['receiver'];

    $sms['sender'] = $_POST['sender'];
    $sms['testmode_yn'] = empty($_POST['testmode_yn']) ? '' : $_POST['testmode_yn'];
    $sms['msg_type'] = $_POST['msg_type'];

    /*****/
    $host_info = explode("/", $sms_url);
    $port = $host_info[0] == 'https:' ? 443 : 80;

    $oCurl = curl_init();
    curl_setopt($oCurl, CURLOPT_PORT, $port);
    curl_setopt($oCurl, CURLOPT_URL, $sms_url);
    curl_setopt($oCurl, CURLOPT_POST, 1);
    curl_setopt($oCurl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($oCurl, CURLOPT_POSTFIELDS, $sms);
    curl_setopt($oCurl, CURLOPT_SSL_VERIFYPEER, FALSE);

    $ret = curl_exec($oCurl);
    curl_close($oCurl);

    $retArr = json_decode($ret, TRUE); // 결과배열

    $list = array(
        "authcode" => $randcode,
        "authresult" => $retArr['result_code']
    );

    echo json_encode($list);
}
