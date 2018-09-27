<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 27/09/2018
 * Time: 14:59
 */
interface OsInterface
{
    /**
     * Interface method for stopping os.
     *
     * @return mixed
     */
    public function halt();

    /**
     * Interface method for getting name.
     *
     * @return mixed
     */
    public function getName();
}