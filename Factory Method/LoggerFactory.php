<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 27/09/2018
 * Time: 15:39
 */
interface LoggerFactory
{
    /**
     * Method for creating logger that is implemented in
     * FileLoggerFactory and StdoutLoggerFactory.
     *
     * @return Logger
     */
    public function createLogger():Logger;
}