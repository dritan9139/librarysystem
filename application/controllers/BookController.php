<?php

class BookController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $this->_helper->layout->setLayout('layout_admin');
        $db = Zend_Db_Table::getDefaultAdapter(); 
		$sql = 'SELECT * FROM book ';
	    $result = $db->fetchAll($sql);
	    $page=$this->_getParam('page',1);
	    $paginator = Zend_Paginator::factory($result);
	    $paginator->setItemCountPerPage(2);
	    $paginator->setCurrentPageNumber($page);

        $this->view->paginator=$paginator;
 
		
    }

    public function editAction()
    {
        // action body
    }

    public function deleteAction()
    {
        // action body
    }

    public function addAction()
    {
        // action body
    }


}







