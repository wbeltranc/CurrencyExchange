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
 * @category        Helper
 * @author          Will Beltran <wbeltran@beltranc.com>
 * @license         http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace BeltranC\CurrencyExchange\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

/**
 * Class Data
 *
 * @package BeltranC\CurrencyExchange\Helper
 */
class Data extends AbstractHelper
{
    /**
     * @var \Magento\Framework\HTTP\Client\Curl
     */
    protected $curl;

    /**
     * Data constructor.
     * @param \Magento\Framework\App\Helper\Context $context
     * @param \Magento\Framework\HTTP\Client\Curl $curl
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\HTTP\Client\Curl $curl
    ) {
        $this->curl = $curl;
        parent::__construct($context);
    }

    /**
     * Method to consult the Banxico API endpoint and that returns the exchange rate Pesos per dollar
     *
     * @return bool|string
     */
    public function getCurrentExchangeRate()
    {
        if ($this->isEnabled()) {
            $url = $this->getConfigValue('currencyexchange/general/endpoint', null);
            $tokenType = $this->getConfigValue('currencyexchange/general/type_token', null);
            $token = $this->getConfigValue('currencyexchange/general/token', null);
            $this->curl->setHeaders([
                'Content-Type' => 'application/json',
                $tokenType => $token
            ]);
            $this->curl->get($url);
            $response = $this->curl->getBody();
            $response = json_decode($response,true);

            if($response['bmx']['series'][0]['datos'][0]['dato']){
                return $response['bmx']['series'][0]['datos'][0]['dato'];
            }else{
                return false;
            }
        } else {
            return "This module is disabled";
        }
    }

    /**
     * Method to validate if the module is enabled.
     *
     * @return mixed
     */
    private function isEnabled()
    {
        return $this->getConfigValue('currencyexchange/general/enable', null);
    }

    /**
     * Method that gets the configuration data.
     *
     * @param string|$field
     * @param null|$storeId
     * @return mixed
     */
    private function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue($field, ScopeInterface::SCOPE_STORE, $storeId);
    }
}
