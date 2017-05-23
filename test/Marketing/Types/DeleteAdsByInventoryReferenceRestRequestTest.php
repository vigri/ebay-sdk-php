<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Marketing\Types;

use DTS\eBaySDK\Marketing\Types\DeleteAdsByInventoryReferenceRestRequest;

class DeleteAdsByInventoryReferenceRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DeleteAdsByInventoryReferenceRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\DeleteAdsByInventoryReferenceRestRequest', $this->obj);
    }

    public function testExtendsDeleteAdsByInventoryReferenceRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\DeleteAdsByInventoryReferenceRequest', $this->obj);
    }
}