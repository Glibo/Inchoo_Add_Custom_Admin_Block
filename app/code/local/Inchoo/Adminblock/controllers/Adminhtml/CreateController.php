<?php

class Inchoo_Adminblock_Adminhtml_CreateController extends Mage_Adminhtml_Controller_Action{
    
    public function indexAction(){
                $this->loadLayout()
                ->_addContent(
                $this->getLayout()
                ->createBlock('inchoo_adminblock/adminhtml_adminblock')
                ->setTemplate('inchoo/adminblock.phtml'))
                ->renderLayout();
    }
}