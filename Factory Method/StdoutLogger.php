<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 27/09/2018
 * Time: 15:39
 */
class StdoutLogger implements Logger
{

    /**
     * Echoes string as message.
     * - - - - - - - - - - - - - - - - - - - - -
     * - notice - return value set for PHPDoc. -
     * - - - - - - - - - - - - - - - - - - - - -
     * @param string $message
     * @return string
     */
    public function log(string $message): string
    {
        echo $message;
        return $message;
    }


}