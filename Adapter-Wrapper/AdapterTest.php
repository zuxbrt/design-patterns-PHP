<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 27/09/2018
 * Time: 12:06
 */

use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{

    /**
     * Test book interface with class book and its functions
     */
    public function testCanTurnPageOnBook()
    {
        // creates new book class with methods from BookInterface
        $book = new Book();
        $book->open();
        $book->turnPage();

        // checks if getPage returns the correct value
        $this->assertEquals(1, $book->getPage());
    }


    /**
     * Assign a kindle as a eBook for EBookAdapter and test functions
     * from bookInterface which are implemented in EBookAdapter.
     */
    public function testCanTurnEBookPage()
    {
        // creates a new kindle for eBook
        $kindle = new Kindle();

        // Since bookInterface functions are not valid for kindle,
        // $book @var is created using a new Adapter for Kindle, called EBookAdapter.
        // EBookAdapter implements EBookInterface, which methods are intended for EBook ($kindle)
        $book = new EBookAdapter($kindle);

        $book->open();
        $book->turnPage();

        // checks if getPage returns the correct value
        $this->assertEquals(1, $book->getPage());

    }
}