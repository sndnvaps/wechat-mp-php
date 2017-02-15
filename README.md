# use composer to download dependency packages for "wechat.php"

## install composer

```bash
	$curl -sS https://getcomposer.org/installer | php
	$cp composer.phar /usr/local/bin/composer
```
## run composer to download dependency packages
```bash
composer install
```


## 修改公众号的相关参数
   修改[wechat.php](wechat.php),中如下的内容
 
```php
   $options = array(
   	'token'=>'sndnvaps', //填写你设定的key
	'encodingaeskey'=>'encodingaeskey' //填写加密用的EncodingAESKey，如接口为明文模式可忽略
	'appid'=>'wxdk1234567890', //填写高级调用功能的app id
	'appsecret'=>'xxxxxxxxxxxxxxxxxxx' //填写高级调用功能的密钥
    );
```
 
## 在微信公众号后台配置接口信息

```
URL：http://host:port/wechat-mp/wechat.php
Token:sndnvaps
验证接口配置信息时把 wechat.php 中下面这行代码取消注释，验证完后加上注释

$weObj->valid();
```
