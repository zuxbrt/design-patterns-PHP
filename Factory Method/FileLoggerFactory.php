<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 27/09/2018
 * Time: 15:40
 */
class FileLoggerFactory implements LoggerFactory
{
    /**
     * @var string
     */
    private $filePath;

    /**
     * FileLoggerFactory constructor.
     * @param string $filePath
     */
    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    /**
     * Creates a new logger from interface LoggerFactory and passes argument
     * $this->filePath required for setting file's name and path in FileLogger class.
     *
     * @return Logger
     */
    public function createLogger(): Logger
    {
       return new FileLogger($this->filePath);
    }

}