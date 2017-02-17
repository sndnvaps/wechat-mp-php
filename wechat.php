<?php
require_once(__dir__ . '/wechat-php-sdk/wechat.class.php');
include(__dir__ . '/Event_handler.php');
include(__dir__ . '/Create_menu.php');
//wechat.php

$options = array(
	'token'=>'sndnvaps', //填写你设定的key
	//'encodingaeskey'=>'encodingaeskey' //填写加密用的EncodingAESKey，如接口为明文模式可忽略
	'appid'=>'wxd82fa72a3fxxxxxxxxx', //填写高级调用功能的app id
	'appsecret'=>'d4624c36b6795d1d99dcxxxxxxxxxxxxx' //填写高级调用功能的密钥
    );
$weObj = new Wechat($options);
$weObj->valid();//明文或兼容模式可以在接口验证通过后注释此句，但加密模式一定不能注释，否则会验证失败
Create_menu($weObj);
$type = $weObj->getRev()->getRevType();
switch($type) {
    case Wechat::MSGTYPE_TEXT:
            $weObj->text("hello, I'm wechat")->reply();
            exit;
            break;
    case Wechat::MSGTYPE_EVENT:
	    Event_handler($weObj);
            break;
    case Wechat::MSGTYPE_IMAGE:
            break;
    default:
            $weObj->text("help info")->reply();
}
