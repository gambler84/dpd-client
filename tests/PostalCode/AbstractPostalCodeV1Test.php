<?php

namespace Webit\DPDClient\PostalCode;

class AbstractPostalCodeV1Test extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function testGetters()
    {
        $countryCode = 'PL';
        $zipCode = '32020';

        $postalCode = new ConcretePostalCode($countryCode, $zipCode);

        $this->assertEquals(
            $countryCode, $postalCode->countryCode(),
            $zipCode, $postalCode->zipCode()
        );
    }
}

class ConcretePostalCode extends AbstractPostalCodeV1
{

}
