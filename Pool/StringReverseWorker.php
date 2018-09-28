<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 28/09/2018
 * Time: 14:58
 */
class StringReverseWorker
{
    /**
     * @var DateTime
     */
    private $createdAt;

    /**
     * Assigns createdAt as a DateTime object.
     *
     * StringReverseWorker constructor.
     */
    public function __construct()
    {
        $this->createdAt = new DateTime();
    }

    /**
     * Reverses given string.
     *
     * @param string $text
     * @return string
     */
    public function run(string $text)
    {
        return strrev($text);
    }

}