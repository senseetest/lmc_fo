<?php

class ShippingController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $this->view->shipping = 'express';
    }
    public function shippingAction()[
    {
	$this->shippingMode = 'express';
    }

}

