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

        $event = Mage::getModel('example/event');

        $event->setName('Test Event')->save();

        Mage::getSingleton('adminhtml/session')->addSuccess(
            'Event saved. ID = ' . $event->getId()
        );

        $this->loadLayout();

        return $this->renderLayout();
    }
}