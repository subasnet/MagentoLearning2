<?php
/**
 * app/code/local/MasteringMagento/Example/Block/Adminhtml/Event/Edit/Form.php
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
class MasteringMagento_Example_Block_Adminhtml_Event_Edit_Form extends 
    Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form(
            array('id' => 'edit_form','action' => $this->getData('action'), 'method' => 'post'
            )
        );

        $fieldset = $form->addFieldset('base_fieldset', array('legend' => Mage::helper('example
            ')->__('General Information'), 'class' => 'fieldset-wide'));

        $fieldset->addField('name', 'text', array(
            'name'      => 'name',
            'label'     => Mage::helper('example')->__('Event Name'),
            'title'     => Mage::helper('example')->__('Event Name'),
            'required'  => true
        ));

        $dataFormatIso = Mage::app()->getLocale()->getDataFormat(Mage_Core_Model_Locale::
            FORMAT_TYPE_SHORT);
        $fieldset->addField('start', 'date', array(
            'name'      => 'start',
            'format'    => $dataFormatIso,
            'image'     => $this->getSkinUrl('images/grid-cal.gif'),
            'label'     => Mage::helper('example')->__('Start Date'),
            'title'     => Mage::helper('example')->__('Start Date'),
            'required'  => true
        ));

         $fieldset->addField('end', 'date', array(
            'name'      => 'end',
            'format'    => $dataFormatIso,
            'image'     => $this->getSkinUrl('images/grid-cal.gif'),
            'label'     => Mage::helper('example')->__('End Date'),
            'title'     => Mage::helper('example')->__('End Date'),
            'required'  => true
        ));

        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }
}