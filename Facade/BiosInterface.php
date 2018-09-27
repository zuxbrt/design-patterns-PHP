<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 27/09/2018
 * Time: 14:59
 */
interface BiosInterface
{
    /**
     * Interface method.
     *
     * @return mixed
     */
    public function execute();

    /**
     * Interface method.
     *
     * @return mixed
     */
    public function waitForKeyPress();

    /**
     * Interface method for launching bios with OsInterface.
     *
     * @param OsInterface $os
     * @return mixed
     */
    public function launch(OsInterface $os);

    /**
     * Interface method for shutting down.
     *
     * @return mixed
     */
    public function powerDown();
}