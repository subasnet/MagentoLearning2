<?php
/**
 * app/code/local/MasteringMagento/Example/controllers/ExampleController.php
 *
 * This is description
 *
 * NOTICE OF LICENSE
 *
 * @author      Subash Basnet
 * @category    MasteringMagento
 * @package     Example
 * @copyright   Copyright (c) 2017 
 */
class MasteringMagento_Example_Adminhtml_ExampleController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();

        $this->_addContent(
            $this->getLayout()->createBlock('example/adminhtml_event_edit')
        );

        return $this->renderLayout();
    }
}