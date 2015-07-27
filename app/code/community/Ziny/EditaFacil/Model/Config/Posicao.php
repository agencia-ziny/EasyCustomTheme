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
class Ziny_EditaFacil_Model_Config_Posicao {

    public function toOptionArray() {
        return array(
            array(
                'value' => '',
                'label' => Mage::helper('editafacil')->__('None')),
            array(
                'value' => 'left',
                'label' => Mage::helper('editafacil')->__('Left')),
            array(
                'value' => 'center',
                'label' => Mage::helper('editafacil')->__('Center')),
            array(
                'value' => 'right',
                'label' => Mage::helper('editafacil')->__('Right'))
        );
    }

}
