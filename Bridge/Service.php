<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 27/09/2018
 * Time: 13:02
 */
abstract class Service
{
    /**
     * @var FormatterInterface
     */
    protected $implementation;

    /**
     * Service constructor.
     * @param FormatterInterface $printer
     */
    public function __construct(FormatterInterface $printer)
    {
        $this->implementation = $printer;
    }

    /**
     * Set printer variable as a formatter for objects.
     *
     * @param FormatterInterface $printer
     */
    public function setImplementation(FormatterInterface $printer)
    {
        $this->implementation = $printer;
    }

    /**
     * Defining abstract function that will be implemented in helloWorldService
     *
     * @var string
     * @return mixed
     */
    abstract public function get(string $string);

}