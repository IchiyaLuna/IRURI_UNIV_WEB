<?php
function genRandStr($length = 5)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return "user_" . $randomString;
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

$phone = $_GET['pnum'];

$sms_url = "https://apis.aligo.in/send/"; // 전송요청 URL
$sms['user_id'] = "akkyu0724"; // SMS 아이디
$sms['key'] = "6fc99e7ezqd9l6bikwhzyqq7btv87iho"; //인증키

$randcode = GenRandNum(6);

$_POST['msg'] = '안녕하세요. API TEST SEND' . $randcode;
$_POST['receiver'] = $phone;

$_POST['sender'] = "01025623531";
$_POST['testmode_yn'] = 'Y';
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

//echo $ret;


echo $randcode;
