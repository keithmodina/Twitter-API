<?php
require_once('TwitterAPIExchange.php');
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
'oauth_access_token' => "737896074573123584-wM6Jr7mxfVqE99ekxgyLP9VQ0jOaz4F",
'oauth_access_token_secret' => "GQ4T3s2ICP2zo8lSnyExl8MqphtqqIDYbbZG4W1FhHoKm",
'consumer_key' => "9GFmwDbyUvgSryqwxSDnXFycr",
'consumer_secret' => "4m9G8VkY1ZkOacLONOZaHuSNwWruKhHER3BsQ8gFRGJ3L1vU0d"
);
$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$getfield = '?screen_name=gmabrandtalk';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
$string = $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest(true, array(CURLOPT_CAINFO => dirname(__FILE__) . '/cacert.pem'));
//    ->performRequest(true, array(CURLOPT_SSL_VERIFYHOST => 0, CURLOPT_SSL_VERIFYPEER => 0));

echo $string;
?>