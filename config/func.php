<?php
function redirect($http = ''){
    if($http){
        $redirect = $http;
    }else{
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    }
    header("Location: $redirect");
    exit;
}

function debug($arr){
    echo '<pre>' . print_r($arr, true) . '</pre>';
}

function removeHTML($str){
    htmlspecialchars($str);
    trim($str);
    strip_tags($str);
    return $str;
}
function getYear($date){
    $date = date_create($date);
    $now = date_create(date('Y-m-d'));
    $diff = date_diff($date, $now)->format('%y');
    return $diff;
}

function getFIO($lastname, $firstname, $patronymic){
    return $lastname . ' ' . $firstname . ' ' . $patronymic;
}


function formatDate($date, $format){
    return date_format(date_create($date), $format);
}
