<?php
class PathToClass_ClassName extends Zend_Db_Table_Abstract
{
    /*$_name is zend global for selecting db table*/
    protected $_name = 'contsize';

    public function paginationZend()

    /*$this->select() by default selectingall records from database*/
    $SELECT = $this->SELECT();
    $result = $this->fetchAll($SELECT);
    $page=$this->_getParam('page',1);
    $paginator = Zend_Paginator::factory($result);
    $paginator->setItemCountPerPage(10);
    $paginator->setCurrentPageNumber($page);
    $this->view->paginator=$paginator;

}