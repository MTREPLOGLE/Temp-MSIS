<?php


require '../../App/common.php';

$taskID = $_GET['taskId'] ?? 0 ;

if ($taskID < 1) {
  throw new Exception('Invalid Task ID');
}

$workArr = Work::getWorkByTaskId($taskID);

$json = json_encode($workArr, JSON_PRETTY_PRINT);

echo $json;
