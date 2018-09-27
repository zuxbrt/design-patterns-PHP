<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 27/09/2018
 * Time: 14:58
 */
class Facade
{
    /**
     * @var OsInterface
     */
    private $os;

    /**
     * @var BiosInterface
     */
    private $bios;

    /**
     * Facade constructor.
     * @param BiosInterface $bios
     * @param OsInterface $os
     */
    public function __construct(BiosInterface $bios, OsInterface $os)
    {
        $this->bios = $bios;
        $this->os = $os;
    }


    /**
     * This function calls methods from both interfaces constructed in Facade constructor.
     * Launch method from BiosInterface uses OsInterface.
     */
    public function turnOn()
    {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->os);
    }

    /**
     * This function also calls methods from both interfaces constructed in Facade constructor.
     */
    public function turnOff()
    {
        $this->os->halt();
        $this->bios->powerDown();
    }

}