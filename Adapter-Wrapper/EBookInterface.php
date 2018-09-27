<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 27/09/2018
 * Time: 11:55
 */
interface EBookInterface
{

    /**
     * Method for unlocking eBook.
     *
     * @return mixed
     */
    public function unlock();

    /**
     * Method for switching to next page.
     *
     * @return mixed
     */
    public function pressNext();

    /**
     * Returns array [ current page, total pages ].
     *
     * @return array
     */
    public function getPage(): array;
}