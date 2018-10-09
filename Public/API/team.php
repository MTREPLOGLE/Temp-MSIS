<?php

require app/common.php

$taskID = $_GEt['taskId'] ?? 0;

$work = Work::findByTaskID($taskId);

echo json_encode($teams);




<?php
