<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 27/09/2018
 * Time: 13:01
 */
class PlainTextFormatter implements FormatterInterface
{
    /**
     * Returns text formatted as a string type.
     *
     * @param string $text
     * @return string
     */
    public function format(string $text)
    {
        return $text;
    }
}