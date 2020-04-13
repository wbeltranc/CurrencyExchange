<?php
/**
 * Currency Exchange
 * Module to make a query of the appropriate data of the SF43718 series,
 * which returns the exchange rate Pesos to the dollar, from the Banxico API
 * Copyright (C) 2020 BeltranC
 *
 * This file included in BeltranC/CurrencyExchange is licensed under OSL 3.0
 *
 * @package         BeltranC/CurrencyExchange\Helper
 * @category        Helper
 * @author          Will Beltran <wbeltran@beltranc.com>
 * @license         http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'BeltranC_CurrencyExchange',
    __DIR__
);
