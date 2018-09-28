<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 28/09/2018
 * Time: 13:29
 */

use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    /**
     * This function is used for testing for loops.
     * First for loop should create same class
     * ( FooBookPrototype ) for each iteration, that is
     * later validated with assertInstanceOf method at the
     * end of the loop.
     *
     * First for loop should create same class
     * ( BarBookPrototype ) for each iteration, that is
     * later validated with assertInstanceOf method at the
     * end of the loop.
     */
    public function testCanGetFooBook()
    {
        // creating objects FooBookPrototype and BarBookPrototype
        $fooBookPrototype = new FooBookPrototype();
        $barBookPrototype = new BarBookPrototype();

        // first for loop will clone FooBookPrototype 10 times with
        // class name FooBookPrototype, if everything goes well.
        for ($i = 0; $i < 10; $i++){

            // cloning already existing FooBookPrototype
            $book = clone $fooBookPrototype;

            // setting title of book clone
            $book->setTitle('Foo Book Number: ' . $i);

            // checking if created clone is equal to the expected class
            $this->assertInstanceOf(FooBookPrototype::class, $book);

        }

        // second for loop will clone BarBookPrototype 5 times with
        // class name BarBookPrototype, if everything goes well.
        for ($i = 0; $i < 5; $i++){

            // cloning already existing BarBookPrototype
            $book = clone $barBookPrototype;

            // setting title of book clone
            $book->setTitle('Bar Book No ' . $i);

            // checking if created clone is equal to the expected class
            $this->assertInstanceOf(BarBookPrototype::class, $book);

        }

    }
}