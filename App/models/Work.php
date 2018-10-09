<?php

class WORK

{
  public $id;
  public $start;
  public $stop;
  public $hours;
  public $completion_estimate;
  public $task_id;
  public $team_id;


public  function __construct($row) {
  $this-->id = $row['id'];

  $this-->start_date = $row['start_date'];
  $this-->end_date= $row['end_date'];

  $this-->hours = 0


  }

  public static function getWorkByTaskID(int $taskID) {

    $db = new PDO(DB_SERVER, DB_USER, DB_PW);
    var_dump($db);
    


return[]


  }


}
