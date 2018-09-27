<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 27/09/2018
 * Time: 12:03
 */
class Kindle implements EBookInterface
{
    /**
     * @var int
     */
    private $page = 1;

    /**
     * @var int
     */
    private $totalPages = 200;


    /**
     * Increases number of current page by 1.
     */
    public function pressNext()
    {
        $this->page++;
    }

    /**
     * Unlocks the reader.
     */
    public function unlock()
    {
    }

    /**
     * Returns array like [1, 200].
     *
     * @return array
     */
    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }

}