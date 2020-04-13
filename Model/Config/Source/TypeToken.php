<?php
/**
 * Currency Exchange
 * Module to make a query of the appropriate data of the SF43718 series,
 * which returns the exchange rate Pesos to the dollar, from the Banxico API
 * Copyright (C) 2020 BeltranC
 *
 * This file included in BeltranC/CurrencyExchange is licensed under OSL 3.0
 *
 * @package         BeltranC_CurrencyExchange
 * @category        Model
 * @author          Will Beltran <wbeltran@beltranc.com>
 * @license         http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace BeltranC\CurrencyExchange\Model\Config\Source;

/**
 * Class TypeToken
 *
 * @package BeltranC\CurrencyExchange\Model\Config\Source
 */
class TypeToken implements \Magento\Framework\Option\ArrayInterface
{

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [['value' => 'Basic', 'label' => __('Basic')],['value' => 'Bearer', 'label' => __('Bearer')],['value' => 'Bmx-Token', 'label' => __('Bmx-Token')],['value' => 'Digest', 'label' => __('Digest')],['value' => 'OAuth', 'label' => __('OAuth')]];
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return ['Basic' => __('Basic'),'Bearer' => __('Bearer'),'Bmx-Token' => __('Bmx-Token'),'Digest' => __('Digest'),'OAuth' => __('OAuth')];
    }
}
