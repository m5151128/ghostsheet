<?php
 
//======���ץ�åɥ����Ȥμ��� ��������======
 
require './php/Ghostsheet.php';
$gs = new Ghostsheet();
//$gs->set('./cache', './cache/');
$mySpreadsheetId = '1zy1UPxAUkje8QOvjFyq_zY3U31ppJWWrqTgpVMDy7lo/od6/'; //���ץ�åɥ����Ȥ�ID������
$data = $gs->load($mySpreadsheetId); // $data�˲ù����줿�ǡ�������Ǽ����ޤ�
 
//======���ץ�åɥ����Ȥμ��� �����ޤ�======
 
//======JSON�� ��������======
 
$log_all = $data['items']; //���ץ�åɥ����ȤΥǡ�������Ϣ�����󷿤Ǽ�����
$json_hash = json_encode($log_all); //Ϣ�������JSON��ʸ������Ѵ���
echo $json_hash; //JSONʸ�������ϡ�
 
//======JSON�� �����ޤ�======
