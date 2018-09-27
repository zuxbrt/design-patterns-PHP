<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 27/09/2018
 * Time: 13:01
 */
class HtmlFormatter implements FormatterInterface
{

    /**
     * Returns text formatted as a html code with p tag.
     *
     * @param string $text
     * @return string
     */
    public function format(string $text)
    {
        return sprintf('<p>%s</p>', $text);
    }
}