<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 27/09/2018
 * Time: 11:49
 */
class Book implements BookInterface
{
    private $page;

    /**
     * Set page number to 1.
     */
    public function open()
    {
        $this->page = 1;
    }


    /**
     * Increase page by one.
     */
    public function turnPage()
    {
        $this->page++;
    }


    /**
     * Gets value of page
     *
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

}