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
        $Book=new Application_Model_DbTable_Book();
		$data = range(1, 100);
 
		// Get a Paginator object using Zend_Paginator's built-in factory.
		$paginator = Zend_Paginator::factory($data);
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







