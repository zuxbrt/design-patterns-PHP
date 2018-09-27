<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 27/09/2018
 * Time: 15:40
 */
class StdoutLoggerFactory implements LoggerFactory
{

    /**
     * Creates a StdoutLogger class.
     *
     * @return Logger
     */
    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }

}