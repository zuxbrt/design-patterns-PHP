<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 27/09/2018
 * Time: 11:53
 */
class EBookAdapter implements BookInterface
{
    /**
     * @var EBookInterface
     */
    protected $eBook;

    /**
     * EBookAdapter constructor.
     * @param EBookInterface $eBook
     */
    public function __construct(EBookInterface $eBook)
    {
        $this->eBook = $eBook;
    }


    /**
     * This class makes proper translation from one interface to another.
     * Function open() implements unlock unlock() function for eBook.
     */
    public function open()
    {
        $this->eBook->unlock();
    }


    /**
     * Function turnPage() implements function pressNext for eBook.
     */
    public function turnPage()
    {
        $this->eBook->pressNext();
    }


    /**
     * Behavior of EBookInterface is now adapted so it returns one integer.
     *
     * @return int
     */
    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }

}