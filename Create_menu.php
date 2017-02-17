<?php
//Create menu for wechat mp
function Create_menu($wechat) {
	$newmenu =  array(
    		"button"=>
    			array(
    				array('type'=>'click','name'=>'最新消息','key'=>'MENU_KEY_NEWS'),
    				array('type'=>'view','name'=>'我要搜索','url'=>'http://www.baidu.com'),
    				)
   		);
	$wechat->createMenu($newmenu);
}
?>
