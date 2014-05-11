<?php
 
//======スプレッドシートの取得 ここから======
 
require './php/Ghostsheet.php';
$gs = new Ghostsheet();
//$gs->set('./cache', './cache/');
$mySpreadsheetId = '1zy1UPxAUkje8QOvjFyq_zY3U31ppJWWrqTgpVMDy7lo/od6/'; //スプレッドシートのIDを設定
$data = $gs->load($mySpreadsheetId); // $dataに加工されたデータが格納されます
 
//======スプレッドシートの取得 ここまで======
 
//======JSON化 ここから======
 
$log_all = $data['items']; //スプレッドシートのデーターを連想配列型で取得。
$json_hash = json_encode($log_all); //連想配列をJSON型文字列へ変換。
echo $json_hash; //JSON文字列を出力。
 
//======JSON化 ここまで======
