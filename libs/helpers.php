<?php defined('BASE_PATH') OR die("Permision Denied!");

function getCurrentUrl(){
    return 1;
}

function isAjaxRequest(){
    if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
        return true;
    }
    return false;
}

function site_url($uri = ''){
    return BASE_URL . $uri;
}

function redirect($url){
    header("Location: $url");
    die();
}

function diePage($msg){
    echo "<div style='padding: 30px;width: 80%;margin: 0 auto;background: #f9dede;border: 1px solid #cca4a4;color: #521717;border-radius: 5px;font-family: sans-serif;'>$msg</div>";
    die();
}

function message($msg,$cssClass = 'info'){
    echo "<div class='$cssClass' style='direction: rtl;padding: 30px;width: 80%;margin: 5px auto;background: #f9dede;border: 1px solid #cca4a4;color: #521717;border-radius: 5px;font-family: sans-serif;'>$msg</div>";
}

function dd($var){
    echo "<pre style ='color: #a84718;background: #fff;z-index: 999;position: relative;padding: 10px;margin: 10px;border-radius: 5px;border-left: 3px solid #ff982b;'";
    var_dump($var);
    echo "</pre>";
}

function addOrUpdateUrlParam($name, $value)
{
    $params = $_GET;
    unset($params[$name]);
    $params[$name] = $value;
    $current_url = explode("?", $_SERVER['REQUEST_URI'])[0];
    return $current_url .'?'.http_build_query($params);
}