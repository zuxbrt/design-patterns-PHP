<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 27/09/2018
 * Time: 16:36
 */

use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    
    /**
     * This function tests if StdoutLoggerFactory creates a logger that is StdoutLogger class.
     */
    public function testCreatingStdoutLogger()
    {
        // create new StdoutLoggerFactory
        $loggerFactory = new StdoutLoggerFactory();

        // call StdoutLoggerFactory method for creating new logger
        $logger = $loggerFactory->createLogger();

        // check is created logger class is equal to the StdoutLogger class
        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }


    /**
     * This function tests if FileLoggerFactory creates a logger that is FileLogger class.
     */
    public function testCreatingFileLogger()
    {
        // create new FileLoggerFactory with param of directory path used for temporary files
        $fileLoggerFactory = new FileLoggerFactory(sys_get_temp_dir());

        // call fileLoggerFactory method for creating new fileLogger
        $fileLogger = $fileLoggerFactory->createLogger();

        // check if created fileLogger class is equal to the FileLogger class
        $this->assertInstanceOf(FileLogger::class, $fileLogger);

    }

}