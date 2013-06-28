<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $ip = $_SERVER['REMOTE_ADDR];
        $dbLog = new Model_Log();
        $dbLog->logVisitor($ip);
    }


}

