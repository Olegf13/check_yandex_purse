<?php
include 'checkYandexPurse.php';
$testPurses = array(
    '512345678925',
    '498765432131',
    '41001100113',
    '41001123494',
    '41002100117',
    '41002123498',
    '41003100121',
    '41003123403',
);
$result = '';
foreach($testPurses as $purse){
    $result .= '<p>' . $purse . ' purse check <strong>' . ((checkYandexPurse($purse)?'success':'failed')) . '</strong></p>';
}
echo $result;