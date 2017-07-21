<?php

class Application_Model_DbTable_Book extends Zend_Db_Table_Abstract
{

    protected $_name = 'book';
public function getBook($id)
{

$row = $this->fetchRow('id = ' . $id);
if (!$row) {
throw new Exception("Could not find row $id");
}
return $row->toArray();
}
public function addBook($artist, $title)
{
$data = array(
'artist' => $artist,
'title' => $title,
);
$this->insert($data);
}
public function updateBook($id, $artist, $title)
{
$data = array(
'artist' => $artist,
'title' => $title,
);
$this->update($data, 'id = '. (int)$id);
}
public function deleteBook($id)
{
$this->delete('id =' . (int)$id);
}

public function listBook()
{
 $db=Zend_Db_Table::getDefaultAdapter();
 $selectalbums=new Zend_Db_Select($db);
 $selectalbums->from($_name);
 return $selectalbums;
}

}

