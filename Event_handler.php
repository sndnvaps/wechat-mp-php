<?php
require_once(__dir__ . '/wechat-php-sdk/wechat.class.php');

//event_handler
function Event_handler($revData) {
    $eventData = $revData->getRevEvent();
    if($eventData){
	switch($eventData['event']) {
		case Wechat::EVENT_MENU_CLICK:
			$revData->text("这是Click事件")->reply();
			break;
		case Wechat::EVENT_SUBSCRIBE:
			// handle 关注订阅事件
			if(isset($eventData['key'])){
				$revData->text("欢迎从二维码扫描关注")->reply();
			} else {
				$revData->text("欢迎关注")->reply();
			}
		case Wechat::EVENT_SCAN:
			break;
		}
    }
}
?>
