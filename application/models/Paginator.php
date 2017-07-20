<?php

class Application_Model_Paginator
{

public function getItems($offset, $itemCountPerPage)
{
$rows = parent::getItems($offset, $itemCountPerPage);

$tasks = array();
foreach ($rows as $row) {
$task = new Application_Model_Task($row);
$tasks[] = $task;
}
return $tasks;
}
}

