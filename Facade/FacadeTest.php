<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 27/09/2018
 * Time: 15:10
 */

use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{

    /**
     * This functions tests the given interfaces implemented in facade with
     * mock object from PHPUnit_Framework.
     * What it does:
     * - creates OsInterface mock object
     * - sets its method and method return value
     * - creates BiosInterface mock object
     * - sets its methods
     * - expects that launch method will be called only once
     * - creates facade with mock objects
     * - calls turn on fuction from facade
     * - validates return with expected return value
     */
    public function turnComputerOn()
    {
        /**
         * Creates a mock object and set it to $os @var
         *
         * @var OsInterface|\PHPUnit_Framework_MockObject_MockObject $os
         */
        $os = $this->createMock('OsInterface');

        // create mock interface method and its return value
        $os->method('getName')
            ->will($this->returnValue('Linux'));

        /**
         * Creates a mock object and set it to $bios @var
         *
         * @var BiosInterface|\PHPUnit_Framework_MockObject_MockObject $bios
         */
        // create mock class BiosInterface
        $bios = $this->getMockBuilder('Facade\BiosInterface')
            // mock interface methods
            ->setMethods(['launch', 'execute', 'waitForKeyPress'])
            ->disableAutoload()
            ->getMock();

        // mock passable parameter for method
        $bios->expects($this->once())
            ->method('launch')
            ->with($os);

        // create new facade with bios and os
        $facade = new Facade($bios, $os);

        // turn on pc
        $facade->turnOn();

        // validate if mock classes return wanted name
        $this->assertEquals('Linux', $os->getName());
    }

}