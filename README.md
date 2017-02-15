# use composer to download dependency packages for "weixin.php"

## install composer

```bash
	$curl -sS https://getcomposer.org/installer | php
	$cp composer.phar /usr/local/bin/composer
```
## run composer to download dependency packages
```bash
composer install
```


## 在微信公众号后台配置接口信息

URL：http://host:port/wechat-mp/wechat.php
Token:danmaku
验证接口配置信息时把 wechat.php 中下面这行代码取消注释，验证完后加上注释

$weObj->valid();

