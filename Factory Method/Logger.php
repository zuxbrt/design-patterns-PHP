<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 27/09/2018
 * Time: 15:38
 */
interface Logger
{
    /**
     * Interface method for displaying log
     *
     * @param string $message
     * @return mixed
     */
    public function log(string $message);
}