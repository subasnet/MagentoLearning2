<?php
/**
 * app/code/local/MasteringMagento/Example/Model/Resource/Event.php
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
class MasteringMagento_Example_Model_Resource_Event extends Mage_Core_Model_Resource_Db_Abstract
{
    public function _construct()
    {
        $this->_init('example/event', 'event_id');
    }
}
  