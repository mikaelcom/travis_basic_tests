<?php
namespace Tests;

use WsdlToPhp\PackageBase\Tests\TestCase;
use WsdlToPhp\PackageGenerator\ConfigurationReader\GeneratorOptions;
use WsdlToPhp\PackageGenerator\Generator\Generator;

class GeneratorSoapClientSecondTest extends TestCase
{

    public function testFirstInstanceOfGeneratorMustBeReturned()
    {
        $options = GeneratorOptions::instance()->setComposerName('wsdltophp/invalid')
        ->setDestination(__DIR__)
        ->setOrigin('https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl');

        $this->assertInstanceOf(Generator::class, new Generator($options));
    }

    public function __testSoapClientWithPayPalUrlMustReturnASoapClientInstance()
    {
        $this->assertInstanceOf(\SoapClient::class, new \SoapClient('https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl'));
    }

    public function testSecondInstanceOfGeneratorMustBeReturned()
    {
        $options = GeneratorOptions::instance()->setComposerName('wsdltophp/invalid')
            ->setDestination(__DIR__)
            ->setOrigin('https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl');

        $this->assertInstanceOf(Generator::class, new Generator($options));
    }
}
