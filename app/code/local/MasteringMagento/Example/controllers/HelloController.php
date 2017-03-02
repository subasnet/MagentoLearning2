<?php
/**
 * app/code/local/MasteringMagento/Example/controllers/HelloController.php
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
class MasteringMagento_Example_HelloController extends Mage_Core_Controller_Front_Action
{
    public function worldAction()
    {
        echo 'Hello World!';
    }

    public function indexAction()
    {
        echo 'Index Hello World!';
    }
}