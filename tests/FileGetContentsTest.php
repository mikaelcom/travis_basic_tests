<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use WsdlToPhp\PackageGenerator\Generator\Utils;

class FileGetContents extends TestCase
{
    public function testUtilsGetFileContentMustNotReturnFalse()
    {
        $this->assertNotFalse(Utils::getContentFromUrl('https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl'));
    }

    public function testFileGetContentsWithPayPalWsdlUrlMustNotReturnFalse()
    {
        $this->assertNotFalse(file_get_contents('https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl'));
    }
}