<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use WsdlToPhp\PackageGenerator\ConfigurationReader\GeneratorOptions;
use WsdlToPhp\PackageGenerator\Generator\Generator;

class GeneratorTest extends TestCase
{

    public function testGetUrlContentMustNotReturnFalse()
    {
        $options = GeneratorOptions::instance()
            ->setOrigin('http://api.search.live.net/search.wsdl')
            ->setDestination(__DIR__);
        $generator = new Generator($options);
        $content = $generator->getUrlContent('http://api.search.live.net/search.wsdl');
        $this->assertNotNull($content);
    }

    public function testGetUrlContentMustNotReturnFalseWithOtherOptions()
    {
        $options = GeneratorOptions::instance()
            ->setOrigin('http://api.search.live.net/search.wsdl')
            ->setDestination(__DIR__);
        $generator = new Generator($options);
        $generator->setOptionSchemasSave(true);
        $generator->setOptionSchemasFolder('wsdl');
        $content = $generator->getUrlContent('http://api.search.live.net/search.wsdl');
        $this->assertNotNull($content);
        print_r($generator->getSoapClient()->getSoapClient()->getSoapClient());
    }
}
