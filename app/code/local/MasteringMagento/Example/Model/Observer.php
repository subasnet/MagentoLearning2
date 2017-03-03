<?php
/**
 * app/code/local/MasteringMagento/Example/Model/Observer.php
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
class MasteringMagento_Example_Model_Observer
{
    public function controllerActionPredispatch($observer)
    {
        /* @var $observer Mage_Core_Model_Observer */
        $controllerAction = $observer->getEvent()->getControllerAction();

        Mage::log($controllerAction->getRequest()->getParams());
    }
}
  