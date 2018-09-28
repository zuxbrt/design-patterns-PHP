<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 27/09/2018
 * Time: 13:45
 */

use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{

    /**
     * Testing PlainTextFormatter and HtmlFormatter.
     */
    public function testCanPrintUsingPlainTextPrinter()
    {
        // set the string value
        $string = 'Hello World';

        // defining new service with plain text formatter
        $service = new HelloWorldService(new PlainTextFormatter());

        // verify that expected result is equal to the formatted text
        $this->assertEquals('Hello World', $service->get($string));

        // now changing the implementation and using the HtmlFormatter

        // defining new service with html formatter
        $service->setImplementation(new HtmlFormatter());

        // verify that expected result is equal to the formatted text
        $this->assertEquals('<p>Hello World</p>', $service->get($string));

    }
}