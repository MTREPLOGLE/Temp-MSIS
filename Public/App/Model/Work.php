<?php

class team
{
public $id;
public $task_id;

public function __construct($data){
  //TODO
}

public static function getWorkByTaskID(int $taskID)  {

  $db = new PDO(DB_SERVER, DB_USER, DB_PW

  )

$statement = $db->prepare($sql):

$success = $statement->execute([
    $this->task_id,
    $this->team_id,
    $this




])

}



 ?>
