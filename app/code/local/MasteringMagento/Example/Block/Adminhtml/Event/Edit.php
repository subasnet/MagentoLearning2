<?php
/**
 * app/code/local/MasteringMagento/Example/Block/Adminhtml/Event/Edit.php
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
class MasteringMagento_Example_Block_Adminhtml_Event_Edit extends
    Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        $this->_objectId = 'event_id';
        $this->_blockGroup = 'example';
        $this->_controller = 'adminhtml_event';

        parent::__construct();
    }

    /**
     * Get edit form container header text
     *
     * @return string
     */
    public function getHeaderText()
    {
        return Mage::helper('example')->__('New Event');
    }
}