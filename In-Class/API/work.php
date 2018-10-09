<?php


require '../../App/common.php';

if ($_SERVER['REQUEST_METHOD']  == 'POST') {
  require 'workPost.php';
  exit;

}

$taskId = intval($_GET['taskId'] ?? 0) ;

if ($taskId < 1) {
  throw new Exception('Invalid Task ID');
}

$workArr = Work::getWorkByTaskId($taskId);

$json = json_encode($workArr, JSON_PRETTY_PRINT);

header('Content-Type: application/json')
echo $json;
