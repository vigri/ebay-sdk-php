<?php
/**
 * THE CODE IN THIS FILE WAS GENERATED FROM THE EBAY WSDL USING THE PROJECT:
 *
 * https://github.com/davidtsadler/ebay-api-sdk-php
 *
 * Copyright 2014 David T. Sadler
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace DTS\eBaySDK\MerchantData\Types;

/**
 *
 * @property boolean $BuyerSelectedShipping
 * @property \DTS\eBaySDK\MerchantData\Enums\CheckoutStatusCodeType $CheckoutStatus
 * @property \DTS\eBaySDK\MerchantData\Enums\CompleteStatusCodeType $CompleteStatus
 * @property \DTS\eBaySDK\MerchantData\Enums\InquiryStatusCodeType $InquiryStatus
 * @property boolean $IntegratedMerchantCreditCardEnabled
 * @property \DateTime $LastTimeModified
 * @property \DTS\eBaySDK\MerchantData\Enums\PaymentHoldStatusCodeType $PaymentHoldStatus
 * @property \DTS\eBaySDK\MerchantData\Enums\BuyerPaymentInstrumentCodeType $PaymentInstrument
 * @property \DTS\eBaySDK\MerchantData\Enums\BuyerPaymentMethodCodeType $PaymentMethodUsed
 * @property \DTS\eBaySDK\MerchantData\Enums\ReturnStatusCodeType $ReturnStatus
 * @property \DTS\eBaySDK\MerchantData\Enums\PaymentStatusCodeType $eBayPaymentStatus
 */
class TransactionStatusType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'BuyerSelectedShipping' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'BuyerSelectedShipping'
        ),
        'CheckoutStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CheckoutStatus'
        ),
        'CompleteStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CompleteStatus'
        ),
        'InquiryStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InquiryStatus'
        ),
        'IntegratedMerchantCreditCardEnabled' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardEnabled'
        ),
        'LastTimeModified' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'LastTimeModified'
        ),
        'PaymentHoldStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldStatus'
        ),
        'PaymentInstrument' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentInstrument'
        ),
        'PaymentMethodUsed' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaymentMethodUsed'
        ),
        'ReturnStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnStatus'
        ),
        'eBayPaymentStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayPaymentStatus'
        )
    );

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = array())
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'urn:ebay:apis:eBLBaseComponents';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}