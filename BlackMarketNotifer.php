<?php

header("Content-Type: text/html;charset=utf-8");
$realm_name = "（一区）基尔加丹/奥拉基尔"; //服务器名称 http://wowdata.top/blackmarket/
$key = 'SCU**********30ac3673a8*******dbdc9ffeb7580**********'; //Server酱SCKEY申请地址 https://sc.ftqq.com
$url = "http://wowdata.top/blackmarket/blackmarket_data.js";

function curl_get($url) {
	if (function_exists('curl_init') && function_exists('curl_exec')) {
		$ip_long = array(
                    array('607649792', '608174079'), //36.56.0.0-36.63.255.255
                    array('1038614528', '1039007743'), //61.232.0.0-61.237.255.255
                    array('1783627776', '1784676351'), //106.80.0.0-106.95.255.255
                    array('2035023872', '2035154943'), //121.76.0.0-121.77.255.255
                    array('2078801920', '2079064063'), //123.232.0.0-123.235.255.255
                    array('-1950089216', '-1948778497'), //139.196.0.0-139.215.255.255
                    array('-1425539072', '-1425014785'), //171.8.0.0-171.15.255.255
                    array('-1236271104', '-1235419137'), //182.80.0.0-182.92.255.255
                    array('-770113536', '-768606209'), //210.25.0.0-210.47.255.255
                    array('-569376768', '-564133889'), //222.16.0.0-222.95.255.255
                    );
		$rand_key = mt_rand(0, 9);
		$ip= long2ip(mt_rand($ip_long[$rand_key][0], $ip_long[$rand_key][1]));
		$agentarry=[
            //PC端 UserAgent
      		"safari 5.1 – MAC"=>"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/536.11 (KHTML, like Gecko) Chrome/20.0.1132.57 Safari/536.11",
      		"safari 5.1 – Windows"=>"Mozilla/5.0 (Windows; U; Windows NT 6.1; en-us) AppleWebKit/534.50 (KHTML, like Gecko) Version/5.1 Safari/534.50",
      		"Firefox 38esr"=>"Mozilla/5.0 (Windows NT 10.0; WOW64; rv:38.0) Gecko/20100101 Firefox/38.0",
      		"IE 11"=>"Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; .NET4.0C; .NET4.0E; .NET CLR 2.0.50727; .NET CLR 3.0.30729; .NET CLR 3.5.30729; InfoPath.3; rv:11.0) like Gecko",
      		"IE 9.0"=>"Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0",
      		"IE 8.0"=>"Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0)",
      		"Firefox 54.0.1 – MAC"=>"Mozilla/5.0 (Macintosh; Intel Mac OS X 10.6; rv:2.0.1) Gecko/20100101 Firefox/4.0.1",
      		"Firefox 56.0.0 – windows"=>"Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0",
      		"Opera 11.11 – MAC"=>"Opera/9.80 (Macintosh; Intel Mac OS X 10.6.8; U; en) Presto/2.8.131 Version/11.11",
      		"Opera 11.11 – Windows"=>"Opera/9.80 (Windows NT 6.1; U; en) Presto/2.8.131 Version/11.11",
      		"Chrome 17.0 – MAC"=>"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_0) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.56 Safari/535.11",
      		"傲游（Maxthon）"=>"Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Maxthon 2.0)",
      		"腾讯 TT"=>"Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; TencentTraveler 4.0)",
      		"世界之窗（The World） 2.x"=>"Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)",
      		"世界之窗（The World） 3.x"=>"Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; The World)",
      		"360 浏览器"=>"Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; 360SE)",
      		"搜狗浏览器 1.x"=>"Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; SE 2.X MetaSr 1.0; SE 2.X MetaSr 1.0; .NET CLR 2.0.50727; SE 2.X MetaSr 1.0)",
      		"Avant"=>"Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Avant Browser)",
      		"Green Browser"=>"Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)",
            //移动端 UserAgent
      		"safari iOS 4.33 – iPhone"=>"Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8J2 Safari/6533.18.5",
      		"safari iOS 4.33 – iPod Touch"=>"Mozilla/5.0 (iPod; U; CPU iPhone OS 4_3_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8J2 Safari/6533.18.5",
      		"safari iOS 4.33 – iPad"=>"Mozilla/5.0 (iPad; U; CPU OS 4_3_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8J2 Safari/6533.18.5",
      		"Android N1"=>"Mozilla/5.0 (Linux; U; Android 2.3.7; en-us; Nexus One Build/FRF91) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1",
      		"Android QQ 浏览器 For android"=>"MQQBrowser/26 Mozilla/5.0 (Linux; U; Android 2.3.7; zh-cn; MB200 Build/GRJ22; CyanogenMod-7) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1",
      		"Android Opera Mobile"=>"Opera/9.80 (Android 2.3.4; Linux; Opera Mobi/build-1107180945; U; en-GB) Presto/2.8.149 Version/11.10",
      		"Android Pad Moto Xoom"=>"Mozilla/5.0 (Linux; U; Android 3.0; en-us; Xoom Build/HRI39) AppleWebKit/534.13 (KHTML, like Gecko) Version/4.0 Safari/534.13",
      		"BlackBerry"=>"Mozilla/5.0 (BlackBerry; U; BlackBerry 9800; en) AppleWebKit/534.1+ (KHTML, like Gecko) Version/6.0.0.337 Mobile Safari/534.1+",
      		"WebOS HP Touchpad"=>"Mozilla/5.0 (hp-tablet; Linux; hpwOS/3.0.0; U; en-US) AppleWebKit/534.6 (KHTML, like Gecko) wOSBrowser/233.70 Safari/534.6 TouchPad/1.0",
      		"UC 标准"=>"NOKIA5700/ UCWEB7.0.2.37/28/999",
      		"UCOpenwave"=>"Openwave/ UCWEB7.0.2.37/28/999",
      		"UC Opera"=>"Mozilla/4.0 (compatible; MSIE 6.0;) Opera/UCWEB7.0.2.37/28/999",
      		"微信内置浏览器"=>"Mozilla/5.0 (Linux; Android 6.0; 1503-M02 Build/MRA58K) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/37.0.0.0 Mobile MQQBrowser/6.2 TBS/036558 Safari/537.36 MicroMessenger/6.3.25.861 NetType/WIFI Language/zh_CN",
		];
		$user_agent=$agentarry[array_rand($agentarry,1)];
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-FORWARDED-FOR:'.$ip, 'CLIENT-IP:'.$ip));
		curl_setopt($ch, CURLOPT_REFERER, "http://wowdata.top/blackmarket.php");
		curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
		$data = curl_exec($ch);
		curl_close($ch);
	} else {
		for ($i = 0; $i < 3; $i++) {
			$data = @file_get_contents($url);
			if ($data) break;
		}
	}
	return $data;
}

function strCutByStr(&$str, $findStart, $findEnd = false, $encoding = 'utf-8') {
	if (is_array($findStart)) {
		if (count($findStart) === count($findEnd)) {
			foreach ($findStart as $k => $v) {
				if (($result = strCutByStr($str, $v, $findEnd[$k], $encoding)) !== false) {
					return $result;
				}
			}
			return false;
		} else {
			return false;
		}
	}
	if (($start = mb_strpos($str, $findStart, 0, $encoding)) === false) {
		return false;
	}
	$start+= mb_strlen($findStart, $encoding);
	if ($findEnd === false) {
		return mb_substr($str, $start, NULL, $encoding);
	}
	if (($length = mb_strpos($str, $findEnd, $start, $encoding)) === false) {
		return false;
	}
	return mb_substr($str, $start, $length - $start, $encoding);
}

function convert_unicode($str, $encoding = null) {
	return preg_replace_callback('/\\\\u([0-9a-fA-F]{4})/u', create_function('$match', 'return mb_convert_encoding(pack("H*", $match[1]), "utf-8", "UTF-16BE");') , $str);
}

function get_wowdata($url) {
	$str = curl_get($url);
	$str = strCutByStr($str, "[[", "]]");
	$str = str_replace("[", "array(", $str);
	$str = str_replace("]", ")", $str);
	$str = "\$array=array(array(" . $str;
	$str = $str . "),);";
	return $str;
}

function sc_send($text, $desp = '', $key) {
	$postdata = http_build_query(array(
		'text' => $text,
		'desp' => $desp
		));
	$opts = array(
		'http' => array(
			'method' => 'POST',
			'header' => 'Content-type: application/x-www-form-urlencoded',
			'content' => $postdata
			)
		);
	$context = stream_context_create($opts);
	return $result = file_get_contents('https://sc.ftqq.com/' . $key . '.send', false, $context);
}


$array_str = get_wowdata($url);
eval($array_str);
$i = 0;
$msg = "";

foreach ($array as list($name, $type, $realm, $time, $nowprice, $endtime)) {
	if (convert_unicode($realm) === $realm_name) {
		$i = $i + 1;
		$msg = $msg . $i . "." . convert_unicode($name) . " | 价格:" . $nowprice . "  \r\n";
	}
}


if ($msg!=="") {
	//echo $msg;
	$result = sc_send("黑市刷新提醒", $msg, $key);
    echo $result;
} else {
	$result = sc_send("数据获取失败", "无匹配数据，请检查抓取网站是否升级！", $key);
    echo $result;
}


?>
