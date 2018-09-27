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
        $book = new Book();
        $book->open();
        $book->turnPage();

        $this->assertEquals(2, $book->getPage());
    }


    /**
     * Assign a kindle as a eBook for EBookAdapter and test functions
     * from bookInterface which are implemented in EBookAdapter.
     */
    public function testCanTurnEBookPage()
    {
        $kindle = new Kindle();
        $book = new EBookAdapter($kindle);

        $book->open();
        $book->turnPage();

        $this->assertEquals(2, $book->getPage());

    }
}