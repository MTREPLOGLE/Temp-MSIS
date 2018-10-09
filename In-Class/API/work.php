<?php


require '../../App/common.php';

if ($_SERVER['REQUEST_METHOD']  == 'POST') {
  require 'workPost.php';
  exit;

}

$taskId = intval($_GET['taskId'] ?? 0) ;

if ($taskID < 1) {
  throw new Exception('Invalid Task ID');
}

$workArr = Work::getWorkByTaskId($taskID);

$json = json_encode($workArr, JSON_PRETTY_PRINT);

echo $json;
