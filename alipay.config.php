<?php
 header('Content-type:text/html; Charset=utf-8');
 
//↓↓↓↓↓↓↓↓↓↓请在这里配置您的基本信息↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
//https://open.alipay.com 账户中心->密钥管理->开放平台密钥，填写添加了电脑网站支付的应用的APPID
$appid = '';

//付款成功后的同步回调地址
$returnUrl = 'http://www.xxx.com/return.php';  

//付款成功后的异步回调地址
$notifyUrl = 'http://www.xxx.com/notify.php';

//签名算法类型，支持RSA2和RSA，推荐使用RSA2
$signType = 'RSA2';	

//商户私钥，填写对应签名算法类型的私钥，如何生成密钥参考：https://docs.open.alipay.com/291/105971和https://docs.open.alipay.com/200/105310
$rsaPrivateKey='';

//支付宝公钥，账户中心->密钥管理->开放平台密钥，找到添加了支付功能的应用，根据你的加密类型，查看支付宝公钥
$alipayPublicKey='';

		
//↑↑↑↑↑↑↑↑↑↑请在这里配置防钓鱼信息，如果没开通防钓鱼功能，为空即可 ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑


?>