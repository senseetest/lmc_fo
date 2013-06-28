<?php

class Products_ProductController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $model = new Model_Product();
        $id = $this->_request->getParam('id', false);
        if($id){
    	    $this->view->product = $model->loadProduct($id);
    	    ProductLog::("Viewing product #".$id);
        }
    }


}

