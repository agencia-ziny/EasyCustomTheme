<?php

/**
 * Edita Fácil
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE_AFL.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 *
 * @category   Ziny
 * @package    EditaFacil
 * @copyright  Copyright (c) 2015 Agência Ziny (www.agenciaziny.com.br)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author     Agência Ziny <dev@agenciaziny.com.br>
 */
class Ziny_EditaFacil_Model_Config_Transforma {

    public function toOptionArray() {
        return array(
            array(
                'value' => '',
                'label' => Mage::helper('editafacil')->__('None')),
            array(
                'value' => 'capitalize',
                'label' => Mage::helper('editafacil')->__('Capitalize')),
            array(
                'value' => 'uppercase',
                'label' => Mage::helper('editafacil')->__('Uppercase')),
            array(
                'value' => 'lowercase',
                'label' => Mage::helper('editafacil')->__('Lowercase')),
            array(
                'value' => 'normal',
                'label' => Mage::helper('editafacil')->__('Normal'))
        );
    }

}
