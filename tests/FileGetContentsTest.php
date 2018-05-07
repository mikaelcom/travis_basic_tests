<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class FileGetContents extends TestCase
{
    public function testFileGetContentsWithPayPalWsdlUrlMustNotReturnFalse()
    {
        $this->assertNotFalse(file_get_contents('https://www.paypalobjects.com/wsdl/PayPalSvc.wsdl'));
    }
}