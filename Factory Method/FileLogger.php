<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 27/09/2018
 * Time: 15:39
 */
class FileLogger implements Logger
{
    /**
     * @var string
     */
    private $filePath;

    /**
     * FileLogger constructor.
     * @param string $filePath
     */
    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }


    /**
     * Takes filePath from FileLoggerFactory and uses it for creating log file.
     * - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
     * -     notice: return values are set just for PHPDoc. Return value of      -
     * -   file_put_contents is number of bytes that were written to the file,   -
     * -                or false in case of failure.                             -
     * - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
     * @param string $message
     * @return bool
     */
    public function log(string $message):Bool
    {
        // write data to file named after filePath string
        file_put_contents($this->filePath . PHP_EOL, FILE_APPEND);

        return true;
    }

}