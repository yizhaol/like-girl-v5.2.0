<?php
if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $list = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
    $_SERVER['REMOTE_ADDR'] = $list[0];
    $Filter_IP = $_SERVER['REMOTE_ADDR'];
} else {
    $Filter_IP = $_SERVER['REMOTE_ADDR'];
}

function checkQQ($qq)
{
    if (preg_match("/^[1-9][0-9]{4,}$/", $qq)) {
        return true;
    } else {
        return false;
    }
}

function replaceSpecialChar($Symbol)
{
    $Filter = "/\ |\/|\~|\!|\@|\-|\=|\#|\\$|\%|\^|\&|\:|\*|\"|\(|\)|\_|\+|\{|\}|\<|\>|\?|\[|\]|\,|\/|\;|\'|\`|\=|\\\|\||/";
    return preg_replace($Filter, "", $Symbol);
}

function time_tran($time)
{
    $text = '';
    if (!$time) {
        return $text;
    }
    $current = time();
    $t = $current - $time;
    $retArr = array('刚刚', '秒前', '分钟前', '小时前', '天前', '月前', '年前');
    switch ($t) {
        case $t < 0://时间大于当前时间，返回格式化时间
            $text = date('Y-m-d', $time);
            break;
        case $t == 0://刚刚
            $text = $retArr[0];
            break;
        case $t < 60:// 几秒前
            $text = $t . $retArr[1];
            break;
        case $t < 3600://几分钟前
            $text = floor($t / 60) . $retArr[2];
            break;
        case $t < 86400://几小时前
            $text = floor($t / 3600) . $retArr[3];
            break;
        case $t < 2592000: //几天前
            $text = floor($t / 86400) . $retArr[4];
            break;
        case $t < 31536000: //几个月前
            $text = floor($t / 2592000) . $retArr[5];
            break;
        default: //几年前
            $text = floor($t / 31536000) . $retArr[6];
    }
    return $text;
}




function get_ip_city_New($ip)
{
    $ch = curl_init();
    $url = 'https://www.inte.net/tool/ip/api.ashx?ip='.$ip.'&datatype=json';
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    $location = curl_exec($ch);
    curl_close($ch);
    $data = json_decode($location, true);
    return $data['data'][0];
}
