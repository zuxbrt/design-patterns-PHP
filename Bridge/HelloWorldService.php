<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 27/09/2018
 * Time: 13:02
 */
class HelloWorldService extends Service
{

    /**
     * This function uses abstract function from abstract service class
     * and implements method for text that will be formatted.
     *
     * @var string
     * @return mixed
     */
    public function get(string $string)
    {
        return $this->implementation->format($string);
    }
}