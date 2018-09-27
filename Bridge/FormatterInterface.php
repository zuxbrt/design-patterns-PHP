<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 27/09/2018
 * Time: 13:01
 */
interface FormatterInterface
{
    /**
     * Interface method for formatting text.
     *
     * @param string $text
     * @return mixed
     */
    public function format(string $text);
}