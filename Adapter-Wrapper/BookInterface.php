<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 27/09/2018
 * Time: 11:43
 */
interface BookInterface
{
    /**
     * Defined turnPage method.
     *
     * @return mixed
     */
    public function turnPage();

    /**
     * Defined open method.
     *
     * @return mixed
     */
    public function open();

    /**
     * Defined getPage method.
     *
     * @return int
     */
    public function getPage():int ;
}