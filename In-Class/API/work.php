<?php


require '../../App/common.php';

if ($_SERVER['REQUEST_METHOD']  == 'POST') {
  require 'workPost.php';
  exit;

}

$taskid = intval($_GET['taskId'] ?? 0) ;

if ($taskid < 1) {
  throw new Exception('Invalid Task ID');
}

$workArr = Work::getWorkByTaskId($taskid);

$json = json_encode($workArr, JSON_PRETTY_PRINT);

header('Content-Type: application/json');
echo $json;
