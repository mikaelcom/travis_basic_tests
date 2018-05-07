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

    public function testSoapClientWithPayPalUrlMustReturnASoapClientInstance()
    {
        $this->assertInstanceOf(\SoapClient::class, new \SoapClient('https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl'));
    }

    public function testSecondInstanceOfGeneratorMustBeReturned()
    {
        $options = GeneratorOptions::instance()->setComposerName('wsdltophp/invalid')
            ->setDestination(__DIR__)
            ->setOrigin('https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl');

        $this->assertInstanceOf(Generator::class, new Generator($options));

        if (array_key_exists('__tests__', $GLOBALS)) {
            foreach ($GLOBALS as $key => $value) {
                if ('__tests__' !== $key && $value !== $GLOBALS['__tests__'][$key]) {
                    fwrite(STDERR, sprintf('value of key "%s" was "%s" is now "%s"', $key, $GLOBALS['__tests__'][$key], $value));
                }
            }
        }
    }
}
